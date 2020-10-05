Project.export('@form-createComponent', new Interface ({
    requires: {
        vue: true,
        jquery: true
    },
    elements: {
        vue: ['#modal_insert_component']
    },
    vue: {
        delimiters: ['{', '}'],
        el: "#modal_insert_component",
        data: {
            __editor: CompoundEditor.vue || Object,
            form: [],
        },
        mounted: Event => {},
        methods: {
            open: function (event) {
                this.event = event;
                tb_show('Insert component', '/?TB_inline&inlineId=modal_insert_component&width=600&height=700');
            },

            create: function (event) {

                const Request = new WPAjax('Compound-insertComponent', Object.assign(this.event, event, {
                    page: $page
                }));

                Request.then(Event => {
                    this.__editor.__updateMarkup().then(Event => {
                        tb_remove();
                    });
                })

            },
            
            submit: function (event) {
                
            }
        }
    }
}));