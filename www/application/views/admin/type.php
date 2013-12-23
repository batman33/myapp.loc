<script>
    $(document).ready(function () {

        var crudServiceBaseUrl = "<?php echo URL::base(); ?>api/",
            dataSource = new kendo.data.DataSource({
                transport: {
                    read:  {
                        url: crudServiceBaseUrl + "type_get",
                        dataType: "json"
                    },
                    update: {
                        url: crudServiceBaseUrl + "type_update",
                        dataType: "json"
                    },
                    destroy: {
                        url: crudServiceBaseUrl + "type_destroy",
                        dataType: "json"
                    },
                    create: {
                        url: crudServiceBaseUrl + "type_create",
                        dataType: "json"
                    }
                },
                batch: true,
                pageSize: 20,
                schema: {
                    model: {
                        id: "ProductID",
                        fields: {
                            id: {type: "integer"},
                            name: {validation: {required: true}},
                            description: {type: "string"}
                        }
                    }
                }
            });

        $("#grid").kendoGrid({
            dataSource: dataSource,
            pageable: true,
            height: 430,
            toolbar: ["create"],
            columns: [
                {field:"name", title: "Name"},
                {field: "description", title: "Description"},
                {command: ["edit", "destroy"], title: "&nbsp;", width: "160px"}],
            editable: "popup"
        });
    });
</script>

<h2>Просмотр Типов</h2>

<div id="example" class="k-content">
	<div id="grid">
	
	</div>
</div>