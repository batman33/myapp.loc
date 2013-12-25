<script>
    $(document).ready(function () {

        var crudServiceBaseUrl = "<?php echo URL::base(); ?>api/",
            dataSource = new kendo.data.DataSource({
                transport: {
                    read:  {
                        url: crudServiceBaseUrl + "typecloth_get",
                        dataType: "json"
                    },
                    update: {
                        url: crudServiceBaseUrl + "typecloth_update",
                        dataType: "json"
                    },
                    destroy: {
                        url: crudServiceBaseUrl + "typecloth_destroy",
                        dataType: "json"
                    },
                    create: {
                        url: crudServiceBaseUrl + "typecloth_create",
                        dataType: "json"
                    }
                },
                batch: true,
                pageSize: 10,
                schema: {
                    model: {
                        id: "id",
                        fields: {
                            id: {editable: false, nullable: true},
                            name: {type: "string", validation: {required: true, min: 4}},
                            type_id: {},
                            description: {type: "string", validation: {min: 4}}
                        }
                    }
                },
                requestEnd: onRequestEnd
            });

        var grid = $("#grid").kendoGrid({
            dataSource: dataSource,
            filterable: true,
            sortable: true,
            pageable: {
                refresh: true,
                pageSizes: true,
                buttonCount: 5,
                messages: {
                    display: "{0} - {1} из {2} записей", //{0} is the index of the first record on the page, {1} - index of the last record on the page, {2} is the total amount of records
                    empty: "Нет данных для отображения",
                    page: "Страница",
                    of: "из {0}", //{0} is total amount of pages
                    itemsPerPage: "записей на странице",
                    first: "К первой странице",
                    previous: "Перейти на предыдущую страницу",
                    next: "Следующая страница",
                    last: "К последнией странице",
                    refresh: "Обновить"
                }
            },
            height: 430,
            toolbar: [{ name: "create", text: "Добавить Тип" }],
            columns: [
                {field:"name", title: "Назване"},
                {field:"description", title: "Дополнительно"},
                {field:"type_id", title: "Тип", editor: typeDropDownEditor, template: "#: type_id.name#" },
                {
                    command: [
                        { name: "edit",     text: "Редактировать" }, 
                        { name: "destroy",  text: "Удалить" }
                    ],
                    title: "&nbsp;",
                    width: "225px"
                }
            ],
            editable: "popup",
            columnMenu: {
                messages: {
                    sortAscending: "Сортировка по возрастанию",
                    sortDescending: "Сортировать по убыванию",
                    filter: "Фильтр",
                    columns: "Колонны"
                }
            }
        });
    });

    function typeDropDownEditor(container, options) {
        $('<input type="text" name="type" required="required" data-text-field="name" data-value-field="id" data-bind="value:type_id" data-role="dropdownlist" />')
            .appendTo(container)
            .kendoDropDownList({
                autoBind: false,
                text: 'Выбирите тип',
                value: '',
                dataTextField: "name",
                dataValueField: "id",
                dataSource: {
                    transport: {
                        read: {
                            dataType: "json",
                            url: "<?php echo URL::base(); ?>api/type_get",
                        }
                    }
                }
            });

        $('[data-text-field="name"]').val()
    }

    function onRequestEnd() {
    	var grid = $("#grid").data("kendoGrid");
    		grid.refresh();
    }

</script>

<h2>Просмотр Типов Одежды</h2>

<div id="grid"></div>
