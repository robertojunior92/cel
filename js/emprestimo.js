$(document).ready(function() {
	kendo.culture("pt-BR");
	
	$("#grid").kendoGrid({
		dataSource: {
			transport: {
				read: "../../dados/emprestimo.php",
				dataType: "json"
			},
			schema: {
				data: "data",
				model: {
					fields: {
						id_telefone: { type: "string" },
						id_responsavel: { type: "string" },
						data_emprestimo: { type: "date" },
						data_devolucao: { type: "date" }
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
				field:"id_telefone",
				title:"Telefone"				
			}, {
				field:"id_responsavel",
				title: "Responsavel"
			}, {
				field: "data_emprestimo",
				title: "Data Emprestimo"
			}, {
				field: "data_devolucao",
				title: "Data Devolução"
			}
		]
	});
});