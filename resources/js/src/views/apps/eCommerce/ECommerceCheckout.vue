<!-- =========================================================================================
  File Name: ECommerceCheckout.vue
  Description: eCommerce Checkout page
  ----------------------------------------------------------------------------------------
  
========================================================================================== -->

<template>
    <div id="ecommerce-checkout-demo">
      <h1>Coming soon</h1>
        

                <!-- IF NO ITEMS IN CART -->
              <vx-card title="Add New Program">
                  <vs-button @click="$router.push('/apps/eCommerce/shop').catch(() => {})">Browse Programs</vs-button>
              </vx-card>

            
    </div>
</template>

<script>
import { FormWizard, TabContent } from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
const ItemListView = () => import('./components/ItemListView.vue')

export default {
  data () {
    return {

      // TAB 2
      fullName: '',
      mobileNum: '',
      pincode: '',
      houseNum: '',
      area: '',
      landmark: '',
      city: '',
      state: '',
      addressType: 1,
      addressTypeOptions: [
        { text: 'Home', value: 1 },
        { text: 'Office', value: 2 }
      ],

      // TAB 3
      paymentMethod: 'debit-card',
      cvv: ''
    }
  },
  computed: {
    cartItems () {
      return this.$store.state.eCommerce.cartItems.slice().reverse()
    },
    isInWishList () {
      return (itemId) => this.$store.getters['eCommerce/isInWishList'](itemId)
    }
  },
  methods: {

    // TAB 1
    removeItemFromCart (item) {
      this.$store.dispatch('eCommerce/toggleItemInCart', item)
    },
    wishListButtonClicked (item) {
      // Toggle in Wish List
      if (this.isInWishList(item.objectID)) this.$router.push('/apps/eCommerce/wish-list').catch(() => {})
      else {
        this.toggleItemInWishList(item)
        this.removeItemFromCart(item)
      }
    },
    toggleItemInWishList (item) {
      this.$store.dispatch('eCommerce/toggleItemInWishList', item)
    },
    updateItemQuantity (event, index) {
      const itemIndex = Math.abs(index + 1 - this.cartItems.length)
      this.$store.dispatch('eCommerce/updateItemQuantity', { quantity: event, index: itemIndex })
    },

    // TAB 2
    submitNewAddressForm () {
      return new Promise(() => {
        this.$validator.validateAll('add-new-address').then(result => {
          if (result) {
            // if form have no errors
            this.$refs.checkoutWizard.nextTab()
          } else {
            this.$vs.notify({
              title: 'Error',
              text: 'Please enter valid details',
              color: 'warning',
              iconPack: 'feather',
              icon: 'icon-alert-circle'
            })
          }
        })
      })
    },

    // TAB 3
    makePayment () {
      return new Promise(() => {
        this.$validator.validateAll('cvv-form').then(result => {
          if (result) {
            // if form have no errors
            this.$vs.notify({
              title: 'Success',
              text: 'Payment received successfully',
              color: 'success',
              iconPack: 'feather',
              icon: 'icon-check'
            })
          } else {
            this.$vs.notify({
              title: 'Error',
              text: 'Please enter valid details',
              color: 'warning',
              iconPack: 'feather',
              icon: 'icon-alert-circle'
            })
          }
        })
      })
    }
  },
  components: {
    ItemListView,
    FormWizard,
    TabContent
  }
}
</script>

<style lang="scss" scoped>
#ecommerce-checkout-demo {
    .item-view-primary-action-btn {
        color: #2c2c2c !important;
        background-color: #f6f6f6;
    }

    .item-name {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        -webkit-line-clamp: 2;
    }

    .vue-form-wizard {
        padding-bottom: 0;

        ::v-deep .wizard-header {
            padding: 0;
        }

        ::v-deep .wizard-tab-content {
            padding-right: 0;
            padding-left: 0;
            padding-bottom: 0;

            .wizard-tab-container{
              margin-bottom: 0 !important;
            }
        }
    }
}
</style>
