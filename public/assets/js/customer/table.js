"use strict";
var KTUsersList = function() {
    var e, t, n, r, o = document.getElementById("kt_table_users")

    return {
        init: function() {
            o && (o.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td")
                 
            })), (e = $(o).DataTable({
                dom : '<"d-flex align-items-center position-relative mt-3"l>rt<"bottom"ip><"clear">',
                info: !1,
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                columnDefs: [{
                    orderable: false,
                    searchable: false,
                    targets: 4
                }, 
                {
                    searchable: false,
                    orderable: false,
                    targets: 5
                }],
                order: [[1, 'asc']]
            })).on("draw", (function() {
            })),  document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
                e.search(t.target.value).draw()
            })), document.querySelector('[data-kt-user-table-filter="reset"]').addEventListener("click", (function() {
                document.querySelector('[data-kt-user-table-filter="form"]').querySelectorAll("select").forEach((e => {
                    $(e).val("").trigger("change")
                })), e.search("").draw()
            })), (() => {
                const t = document.querySelector('[data-kt-user-table-filter="form"]'),
                    n = t.querySelector('[data-kt-user-table-filter="filter"]'),
                    r = t.querySelectorAll("select");
                n.addEventListener("click", (function() {
                    var t = "";
                    r.forEach(((e, n) => {
                        e.value && "" !== e.value && (0 !== n && (t += " "), t += e.value)
                    })), e.search(t).draw()
                }))
            })())
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTUsersList.init()
}));
