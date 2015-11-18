$(document).ready(function() {
	kendo.culture("pt-BR");
	
	$("#grid").kendoGrid({
		dataSource: {
			transport: {
				read: "../../dados/telefone.php",
				dataType: "json"
			},
			schema: {
				data: "data",
				model: {
					fields: {
						aparelho: { type: "string" },
						tipo: { type: "string" },
						serial_id: { type: "string" },
						numero: { type: "string" },
						ativo: { type: "string" }
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
				field:"aparelho",
				title:"Aparelho"				
			}, {
				field:"tipo",
				title: "Tipo"
			}, {
				field: "serial_id",
				title: "Serial"
			}, {
				field: "numero",
				title: "Nº"
			}, {
				field: "ativo",
				title: "Ativo"
			}
		]
	});
});