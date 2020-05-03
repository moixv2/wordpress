import Vue from 'vue';
import FloForm from '../public/vue-components/FloForm.vue';


if(jQuery('.app-flo-forms').length) {

  jQuery( ".app-flo-forms" ).each(function( index ) {

    new Vue({
      //el: '.app-flo-forms',
      el: '.app-flo-forms_'+jQuery(this).data('form_id'),

      beforeCreate: function() {
        //console.log(this.$formSettings)
      },


      data: {
        //vue_form_settings: flo_form_settings
      },

      props: ['form_id'],

      components: {
        //'hello': Hello,
        'flo-form' : FloForm
      },

      methods: {
        addFormField: function (key, event ) {
          console.log(event, key);
        }

      }


    });

  });


}
