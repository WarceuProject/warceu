var taxes = {
    dom: {
        buttonAddTax: $('#button-addTax'),
        buttonDeleteTax: $('#button-deleteTax'),
        selectTaxesGridFilterCount: $('#select-taxes-grid-filter-count'),
        divTaxesGrid: $('#div-taxes-grid'),
        currentCountry: ''
    },
    renderer: {
        'country': function(text) {
            if (text == '_ALL') {
                return clientexec.lang('All (Default)');
            } else {
                return text;
            }
        },
        'state': function(text, row) {
            if (text == '_ALL') {
                return clientexec.lang('All (Default)');
            } else {
                return row.statename;
            }
        },
        'yesno': function(text) {
            return text == 'true' ? clientexec.lang('Yes') : clientexec.lang('No');
        },
        'displayrate': function(text) {
            return parseFloat(text) + '%';
        },
        'name': function(text, row) {
            return '<a data-id="'+row.id+'">'+text+'</a>';
        }
    },
    list: {
        countries: [],
        states: []
    },
    checkLists: function() {
        var that = this;

        if (this.list.countries.length == 0) {
            $.getJSON('index.php?fuse=admin&controller=settings&action=getcountrylist', function(response) {
                for (var k in response.countries) {
                    that.list.countries.push({
                        id: response.countries[k].iso,
                        name: response.countries[k].name,
                        division: response.countries[k].division,
                        divisionPlural: response.countries[k].division_plural
                    });
                }
            });
        }
    },
    checkListsStates: function(countryIso, stateIso) {
        var that = this;

        if (taxes.dom.currentCountry != countryIso) {
            that.list.states = [];
            taxes.dom.currentCountry = countryIso;

            $.getJSON('index.php?fuse=admin&controller=settings&action=getstatelist&countryIso='+countryIso+'&stateIso='+stateIso+'&displayAll=1', function(response) {
                for (var k in response.states) {
                    that.list.states.push({
                        id: response.states[k].iso,
                        name: response.states[k].name
                    });
                }
            });
        }
    }
};

taxes.grid = new RichHTML.grid({
    el: 'div-taxes-grid',
    url: 'index.php?fuse=billing&controller=tax&action=gettaxrules',
    root: 'rules',
    totalProperty: 'total',
    baseParams: { limit: taxes.dom.selectTaxesGridFilterCount.val(), sort: 'country, state, level', dir: 'asc' },
    columns: [
        {
            xtype: 'checkbox',
            id: 'row-select',
            dataIndex: 'id'
        },{
            id: 'name',
            dataIndex: 'name',
            text: clientexec.lang('Name'),
            renderer: taxes.renderer.name,
            flex: 1
        },{
            id: 'country',
            dataIndex: 'country',
            text: clientexec.lang('Country'),
            renderer: taxes.renderer.country
        },{
            id: 'state',
            dataIndex: 'state',
            text: clientexec.lang('Division'),
            renderer: taxes.renderer.state
        },{
            id: 'level',
            dataIndex: 'level',
            align: 'center',
            width: 32,
            text: clientexec.lang('Level')
        },{
            id: 'compound',
            dataIndex: 'compound',
            text: clientexec.lang('Compound'),
            width: 64,
            align: 'center',
            renderer: taxes.renderer.yesno
        },{
            id: 'vat',
            dataIndex: 'vat',
            text: clientexec.lang('VAT'),
            width: 26,
            align: 'center',
            renderer: taxes.renderer.yesno
        },{
            id: 'rate',
            dataIndex: 'tax',
            text: clientexec.lang('Rate'),
            width: 41,
            align: 'right',
            renderer: taxes.renderer.displayrate
        }
    ]
});

taxes.editWindow = new RichHTML.window({
    id: 'div-editTaxRule',
    escClose: false,
    grid: taxes.grid,
    showSubmit: true,
    actionUrl: 'index.php?fuse=billing&controller=tax&action=save',
    title: clientexec.lang('Add/Edit Tax Rule'),
    url: 'index.php?fuse=billing&controller=tax&view=edit',
    width: 260,
    minHeight: 350
});

$(document).ready(function(){

    taxes.dom.selectTaxesGridFilterCount.change(function(){
        taxes.grid.reload({params: {start: 0, limit: $(this).val()}});
    });

    $(taxes.grid).bind({
        'rowselect': function(event, data) {
            if (data.totalSelected > 0) {
                taxes.dom.buttonDeleteTax.prop('disabled', false);
            } else {
                taxes.dom.buttonDeleteTax.prop('disabled', true);
            }
        }
    });

    taxes.dom.divTaxesGrid.on('click', 'a', function(event) {
        taxes.checkLists();
//        taxes.checkListsStates();
        taxes.editWindow.show({
            params: {
                id: $(this).attr('data-id')
            }
        });
        event.preventDefault;
    });

    taxes.grid.render();

    taxes.dom.buttonAddTax.click(function(e){
        taxes.checkLists();
//        taxes.checkListsStates();
        taxes.editWindow.show({
            params: {
                id: 0
            }
        });
        e.preventDefault();
    });

    taxes.dom.buttonDeleteTax.click(function(e){
        $.post('index.php?fuse=billing&controller=tax&action=delete',
            { ids: taxes.grid.getSelectedRowIds() },
            function(response) {
                taxes.grid.reload();
                ce.parseActionResponse(response);
            }
        );
        e.preventDefault();
    });
});