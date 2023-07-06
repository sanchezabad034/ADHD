import '../boot.js';
import ProjectRegistrationForm from '../main/components/forms/project-registration-form/ProjectRegistrationForm.vue';
import AddFileButton from './components/AddFileButton.vue';
import AddItemButton from './components/AddUpdateButton.vue';
import AddReviewButton from './components/ReviewButton.vue';
import AssignReviewerForm from './components/forms/AssignReviewerForm.vue';
import BaseForm from '../main/components/forms/base/BaseForm.vue';
import DashboardMenu from './components/dashboard-menu/DashboardMenu.vue';
import DeleteButton from './components/DeleteButton.vue';
import DeleteFileButton from './components/DeleteFileButton.vue';
import GalleryCard from '../main/components/GalleryCard.vue';
import GalleryPanel from './components/GalleryPanel.vue';
import ProfileForm from './components/forms/ProfileForm.vue';
import UserForm from './components/forms/UserForm.vue';
import ProfileGalleryCard from '../main/components/ProfileGalleryCard.vue';
import ResourceTable from './components/ResourceTable.vue';
import Tabs from '../main/components/tabs/Tabs.vue';
import UserBar from './components/UserBar.vue';
import TruncatedText from '../main/components/TruncatedText.vue';
import CallForm from './components/forms/call-form/CallForm.vue';
import ResearcherReviewForm from './components/forms/ResearcherReviewForm.vue';
import NewsForm from './components/forms/NewsForm.vue';

import FormSearch from './components/FormSearch.vue';
import SelectFilter from './components/SelectFilter.vue';


(function() {
    /* Base components
    ------------------------------------------------------------------------- */
    Vue.component('base-form', BaseForm);
    Vue.component('gallery-card', GalleryCard);
    Vue.component('profile-gallery-card', ProfileGalleryCard);

    /* Dashboard components
    ------------------------------------------------------------------------- */
    Vue.component('assign-reviewer-form', AssignReviewerForm);
    Vue.component('delete-button', DeleteButton);
    Vue.component('delete-filebutton', DeleteFileButton);
    Vue.component('additem-button', AddItemButton);
    Vue.component('review-button', AddReviewButton);
    Vue.component('addfile-button', AddFileButton);
    Vue.component('resource-table', ResourceTable);
    Vue.component('tabs-component', Tabs);
    Vue.component('gallery-panel', GalleryPanel);
    Vue.component('truncated-text', TruncatedText);

    /* Single use components
    ------------------------------------------------------------------------- */
    Vue.component('profile-form', ProfileForm);
    Vue.component('user-form', UserForm);
    Vue.component('call-form', CallForm);
    Vue.component('researcherreview-form', ResearcherReviewForm);
    Vue.component('news-form', NewsForm);
    Vue.component('form-search', FormSearch);
    Vue.component('select-filter', SelectFilter);
    Vue.component('project-registration-form', ProjectRegistrationForm);


    const vm = new Vue({
        el: '#dashboard',
        components: { DashboardMenu, UserBar },
        data: {
            isLoading: true,
            path: document.body.getAttribute('data-root') || '',
            menuIsVisible: false,
            mq: false,
            resourceCount: 0,
            model: {}
        },
        mounted() {
            this.mq = window.matchMedia('(min-width:1100px)');
            this.menuIsVisible = this.mq.matches;

            this.mq.addListener(e => this.menuIsVisible = e.matches);

            Vue.nextTick(() => this.isLoading = false);
        },

        methods: {
            /**
             * Show or hide dashboard menu.
             */
            toggleMenu() {
                this.menuIsVisible = ! this.menuIsVisible;
            }
        }
    });


})();
