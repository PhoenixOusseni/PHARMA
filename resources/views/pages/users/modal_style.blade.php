<style>
    /* Styles modernes pour les modals */
    .modal-content {
        border-radius: 5px;
        border: none;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    }

    .modal-header {
        background: linear-gradient(135deg, #218838 0%, #28a745 100%);
        color: white;
        border-radius: 5px 5px 0 0;
        padding: 20px 25px;
        border: none;
    }

    .modal-header .modal-title {
        font-weight: 700;
        font-size: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .modal-header .btn-close {
        background: white;
        opacity: 1;
        border-radius: 50%;
        width: 32px;
        height: 32px;
    }

    .modal-body {
        padding: 30px 25px;
    }

    .modal-form-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
        font-size: 14px;
    }

    .modal-form-control {
        border-radius: 5px;
        border: 1px solid #ddd;
        padding: 12px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .modal-form-control:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .modal-section {
        background: #f8f9fa;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        border-left: 4px solid #28a745;
    }

    .modal-section-title {
        font-size: 16px;
        font-weight: 700;
        color: #28a745;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .btn-modal-primary {
        background: linear-gradient(135deg, #218838 0%, #28a745 100%);
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 25px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-modal-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
        color: white;
    }

    .btn-modal-secondary {
        background: #6c757d;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 25px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-modal-secondary:hover {
        background: #5a6268;
        transform: translateY(-2px);
        color: white;
    }

    .btn-modal-danger {
        background: #dc3545;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 25px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-modal-danger:hover {
        background: #c82333;
        transform: translateY(-2px);
        color: white;
    }

    .payment-operator {
        background: white;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        border: 2px solid #28a745;
        margin-bottom: 20px;
    }

    .payment-instructions {
        background: #fff3cd;
        border-left: 4px solid #ffc107;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .recap-list {
        background: white;
        border-radius: 5px;
        overflow: hidden;
    }

    .recap-list .list-group-item {
        border-left: 3px solid #28a745;
        padding: 15px;
        border-bottom: 1px solid #f0f0f0;
    }

    .recap-list .list-group-item:last-child {
        border-bottom: none;
    }

    .document-info {
        background: #e7f5ff;
        border-left: 4px solid #0dcaf0;
        padding: 15px;
        border-radius: 5px;
        margin-top: 10px;
    }

    .document-info ul {
        margin: 10px 0 0 0;
        padding-left: 20px;
    }

    .document-info li {
        margin-bottom: 8px;
        color: #333;
    }

    .modal-steps {
        position: relative;
        margin-bottom: 30px;
    }

    .modal-step-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        min-width: 80px;
        position: relative;
    }

    .modal-step-item:not(:last-child)::after {
        content: '';
        position: absolute;
        top: 20px;
        left: 60%;
        width: 100%;
        height: 2px;
        background: #dee2e6;
        z-index: -1;
    }

    .modal-step-circle {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background-color: #dee2e6;
        color: #6c757d;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-bottom: 8px;
        transition: all 0.3s ease;
        border: 3px solid #dee2e6;
    }

    .modal-step-label {
        color: #6c757d;
        font-size: 0.85rem;
        line-height: 1.2;
        white-space: nowrap;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .modal-step-item.active .modal-step-circle {
        background: linear-gradient(135deg, #218838 0%, #28a745 100%);
        color: white;
        border-color: #28a745;
        box-shadow: 0 3px 10px rgba(40, 167, 69, 0.3);
        transform: scale(1.1);
    }

    .modal-step-item.active .modal-step-label {
        color: #28a745;
        font-weight: 600;
    }

    .modal-progress-bar {
        height: 25px;
        border-radius: 5px;
        background: linear-gradient(135deg, #218838 0%, #28a745 100%);
        font-weight: 600;
    }
</style>
