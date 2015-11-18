$(document).ready(function() {
	var crudServiceBaseUrl = "//demos.telerik.com/kendo-ui/service"

	kendo.culture("pt-BR");
	
	$("#grid").kendoGrid({
		dataSource: {
			transport: {
				read: "../../dados/itens.php",
				dataType: "json"
			},
			schema: {
				data: "data",
				model: {
					fields: {
						descricao: { type: "string" },
						quantidade: { type: "string" },
						serial_id: { type: "string" },
						id_item: { type: "string" }
					}
				}
			},
			pageSize: 20,
			serverPaging: true,
			serverFiltering: true,
			serverSorting: true
		},
		height: 550,
		navigatable: true,
		filterable: true,
		sortable: true,
		pageable: true,
		toolbar: ["create", "save", "cancel"],
		columns: [
			{ field:"descricao", title:"Descricao", format: "{0:c}" },
			{ field: "quantidade", title: "Quantidade"}, 
			{ field: "serial_id", title: "ID"},
			{ command: "destroy", title:"&nbsp;", width:150 }],
			editable: true
	});
});