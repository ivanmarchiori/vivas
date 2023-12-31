

// Basic Table
new gridjs.Grid({
  columns:
    [
      {
        name: '#',
        sort: {
          enabled: false
      },
        formatter: (function (cell) {
          return gridjs.html('<div class="form-check font-size-16"><input class="form-check-input" type="checkbox" id="orderidcheck01"><label class="form-check-label" for="orderidcheck01"></label></div>');
        })
      },
      {
        name: 'Name',
        formatter: (function (cell) {
          return gridjs.html('<img src="/assets/images/users/'+ cell[0]+'" alt="" class="avatar-sm rounded-circle me-2" /><a href="/leads/list-details/1" class="text-body">' + cell[1] + "</a>");
        })
      },

      "Position", "Email",
      {
        name: "View Details",
        sort: {
          enabled: false
      },
        formatter: (function (cell) {
          return gridjs.html('<ul class="list-inline mb-0">' +
            '<li class="list-inline-item">' +
            '<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="px-2 text-primary"><i class="bx bx-pencil font-size-18"></i></a>' +
            ' </li>' +
            ' <li class="list-inline-item">' +
            ' <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="px-2 text-danger"><i class="bx bx-trash-alt font-size-18"></i></a>' +
            '</li>' +
            ' <li class="list-inline-item dropdown">' +
            '<a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">' +
            ' <i class="bx bx-dots-vertical-rounded"></i>' +
            ' </a>' +
            ' <div class="dropdown-menu dropdown-menu-end">' +
            ' <a class="dropdown-item" href="#">Action</a>' +
            '  <a class="dropdown-item" href="#">Another action</a>' +
            '   <a class="dropdown-item" href="#">Something else here</a>' +
            ' </div>' +
            ' </li>' +
            ' </ul>');
        })
      }
    ],
  pagination: {
    limit: 7
  },
  sort: true,
  fixedHeader: true,
  search: true,
  data: [
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"],
    ["", ["avatar-1.jpg", "Nome Completo"], "Funcao", "email@provedor.com", "000", "Paid", "Mastercard", "Ver Detalhes"]
  ]
}).render(document.getElementById("table-contacts-list"));

flatpickr('#order-date', {
  maxDate: "today"
});
