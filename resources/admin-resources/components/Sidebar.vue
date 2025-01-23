<script setup>
import SideNavLink from "../components/SideNavLink.vue";
import crossSvgIcon from "../assets/icons/cross-svg-icon.vue";
import { useSidebar } from "../stores/sidebar";
const sidebarStore = useSidebar();

const navlinks = [
    {
        label: "dashboard",
        link: "/admin",
        icon_name: "dashboard-svg-icon",
    },

    {
        label: "Revenue",
        link: "/admin/incomes",
        icon_name: "wallet-svg-icon",
        sub_links: [
            {
                label: "Revenue liste",
                link: "/admin/incomes",
            },
            {
                label: "Recevue categories",
                link: "/admin/income-categories",
            },
        ],
    },

    {
        label: "Dépense",
        link: "/admin/expenses",
        icon_name: "bank-card-svg-icon",
        sub_links: [
            {
                label: "Dépense liste",
                link: "/admin/expenses",
            },
            {
                label: "Dépense categories",
                link: "/admin/expense-categories",
            },
        ],
    },

    {
        label: "Visiteurs",
        link: "/admin/visitors",
        icon_name: "customer-svg-icon",
    },

    // {
    //     label: "settings",
    //     link: " ",
    //     icon_name: "setting-svg-icon",
    //     sub_links: [
    //         {
    //             label: "currency",
    //             link: "/admin/currency",
    //         },
    //     ],
    // },
];
</script>

<template>
    <div id="sidebar" :class="{ active: sidebarStore.open }">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header d-flex">
                <div>
                    <img
                        src="../assets/img/finnaf-logo.png"
                        class="cursor-pointer img-fluid"
                        @click="this.$router.push({ name: 'dashboard' })"
                    />
                </div>
                <div class="small-screen-menu-icon ms-3">
                    <crossSvgIcon
                        width="25px"
                        height="25px"
                        @click="sidebarStore.toggle()"
                    />
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <SideNavLink
                        v-for="link in navlinks"
                        :key="link.link"
                        :link_details="link"
                    />
                </ul>
            </div>
        </div>
    </div>
</template>
