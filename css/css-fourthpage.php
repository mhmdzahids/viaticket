
<style>
    .scroll-arrow {
        width: 40px;
        height: 40px;
        border: none;
        z-index: 10;
        cursor: pointer;
        border: 1px solid #e0e0e0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .scroll-container, .promo-cards {
        scroll-behavior: smooth;
    }

    .promo-card {
        width: 270px;
        min-width: 270px;
        max-width: 270px;
    }

    .promo-card .card {
        height: 100%;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .promo-card .card-body {
        display: flex;
        flex-direction: column;
    }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: 100%;
    }

    .airline-info {
        max-width: 70%;
    }

    .refund-info {
        max-width: 100%;
    }

    .flight-info {
        max-width: 60%;
    }

    .badge.bg-danger {
        background-color: #FF545E !important;
        white-space: nowrap;
    }
</style>