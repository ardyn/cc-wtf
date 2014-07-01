Ext.create('Ext.data.Store', {
    storeId:'simpsonsStore',
    fields:['name', 'email', 'phone', 'address', 'status', 'date', 'user'],
    data:{'items':[
        {"name":"Trade Inc", "email":"tradeinc@gmail.com", "phone":"555-111-1224", "address":"Fort Worth, TX", 
        "status":"New", "date":"27 Feb, 2014", "user":"Jon Doe"},
        {"name":"Cooperative Computing", "email":"tradeinc@gmail.com", "phone":"555-111-1224", "address":"Fort Worth, TX", 
        "status":"Entered", "date":"27 Feb, 2014", "user":"Jon Doe"},
        {"name":"RTM Management", "email":"tradeinc@gmail.com", "phone":"555-111-1224", "address":"Fort Worth, TX", 
        "status":"Unqualified", "date":"27 Feb, 2014", "user":"Jon Doe"},
        {"name":"Real Deal", "email":"tradeinc@gmail.com", "phone":"555-111-1224", "address":"Fort Worth, TX", 
        "status":"Dead", "date":"27 Feb, 2014", "user":"Jon Doe"}
    ]},
    proxy: {
        type: 'memory',
        reader: {
            type: 'json',
            root: 'items'
        }
    }
});

Ext.create('Ext.grid.Panel', {
    title: '',
    store: Ext.data.StoreManager.lookup('simpsonsStore'),
    columns: [
        {header: 'Action',  dataIndex: '', width: "9.9%"},
        {header: 'Name', dataIndex: 'name', width: "15%"},
        {header: 'Email', dataIndex: 'email', width: "15%"},
        {header: 'Phone', dataIndex: 'phone', width: "10%"},
        {header: 'Address', dataIndex: 'address', width: "20%"},
        {header: 'Status', dataIndex: 'status', width: "10%"},
        {header: 'Date', dataIndex: 'date', width: "10%"},
        {header: 'User', dataIndex: 'user', width: "10%"}
    ],
    viewConfig: { 
        stripeRows: false, 
        getRowClass: function(record) { 
            var cls = '';
            if (record.get('status') == 'New') {
                cls = 'new-row';
            } else if (record.get('status') == 'Entered') {
                cls = 'entered-row';
            }
             else if (record.get('status') == 'Unqualified') {
                cls = 'unqualified-row';
            }
             else if (record.get('status') == 'Dead') {
                cls = 'dead-row';
            }

            return cls; 
        } 
    },
    height: 400,
    width: '100%',
    renderTo: 'lead_grid',
    collapsible: false,
    resizable: false
});