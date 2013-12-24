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
                            type: {},
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
                {field: "description", title: "Дополнительно"},
                {field: "type", title: "Тип", editor: typeDropDownEditor, template: "#: type.name#" },
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
            },
            filterable: {
                messages: {
                    info: "Инфо:", // sets the text on top of the filter menu
                    filter: "Фильтры", // sets the text for the "Filter" button
                    clear: "Отчистить", // sets the text for the "Clear" button

                    // when filtering boolean numbers
                    isTrue: "Да", // sets the text for "isTrue" radio button
                    isFalse: "Нет", // sets the text for "isFalse" radio button

                    //changes the text of the "And" and "Or" of the filter menu
                    and: "И",
                    or: "ИЛИ"
                },
                operators: {
                    //filter menu for "string" type columns
                    string: {
                        eq: "Равно",
                        neq: "Не содержит",
                        startswith: "Начинается с",
                        contains: "Содержит",
                        endswith: "Заканчивается на"
                    },
                    //filter menu for "number" type columns
                    number: {
                        eq: "Равно",
                        neq: "Разные",
                        gte: "Больше или равно",
                        gt: "Которые",
                        lte: "Меньше или равно",
                        lt: "Менее"
                    },
                    //filter menu for "date" type columns
                    date: {
                        eq: "Равно",
                        neq: "Разные",
                        gte: "Больше или равно",
                        gt: "Которые",
                        lte: "Меньше или равно",
                        lt: "Менее"
                    }
                }
            }
        });
    });


    function typeDropDownEditor(container, options) {
        $('<input required data-text-field="name" data-value-field="id" data-bind="value:' + options.field + '"/>')
            .appendTo(container)
            .kendoDropDownList({
                autoBind: true,
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
    }

    function onRequestEnd() {
    	var grid = $("#grid").data("kendoGrid");
    		
    		grid.refresh();
    }

</script>

<h2>Просмотр Типов Одежды</h2>

<div id="grid"></div>
