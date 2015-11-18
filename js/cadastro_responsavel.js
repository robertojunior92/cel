$(document).ready(function() {
	kendo.culture("pt-BR");
	
	$("#grid").kendoGrid({
		dataSource: {
			transport: {
				read: "../../dados/responsavel.php",
				dataType: "json"
			},
			schema: {
				data: "data",
				model: {
					fields: {
						nome: { type: "string" },
						departamento: { type: "string" },
						registro: { type: "string" }
					}
				}
			},
			pageSize: 20,
			serverPaging: true,
			serverFiltering: true,
			serverSorting: true
		},
		height: 550,
		filterable: true,
		sortable: true,
		pageable: true,
		columns: [
			{
				field:"nome",
				title:"Nome"				
			}, {
				field: "departamento",
				title: "Departamento"
			}, {
				field: "registro",
				title: "Registro"
			}
		]
	});
});