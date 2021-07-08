/*=========================================================================================
  File Name: moduleeCommerce.js
  Description: eCommerce Module
  ----------------------------------------------------------------------------------------
  
==========================================================================================*/


import state from './moduleeCommerceState.js'
import mutations from './moduleeCommerceMutations.js'
import actions from './moduleeCommerceActions.js'
import getters from './moduleeCommerceGetters.js'

export default {
  namespaced: true,
  state,
  mutations,
  actions,
  getters
}
