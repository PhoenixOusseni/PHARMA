<style>
    .registration-container {
        min-height: 100vh;
        padding: 40px 20px;
    }

    .registration-card {
        background: white;
        border-radius: 5px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        max-width: 1200px;
        margin: 0 auto;
        overflow: hidden;
    }

    .registration-header {
        background: linear-gradient(135deg, #14532d 0%, #22c55e 100%);
        padding: 40px;
        text-align: center;
        color: white;
        position: relative;
    }

    .registration-header::before {
        content: '';
        position: absolute;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
        top: -50px;
        right: -50px;
        transform: rotate(45deg);
    }

    .registration-header h2 {
        font-size: 32px;
        font-weight: 700;
        margin: 0;
        position: relative;
        z-index: 1;
    }

    .registration-header p {
        margin: 10px 0 0;
        font-size: 16px;
        opacity: 0.9;
        position: relative;
        z-index: 1;
    }

    .registration-body {
        padding: 40px;
    }

    .steps-container {
        margin-bottom: 40px;
    }

    .step-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        min-width: 100px;
        position: relative;
    }

    .step-circle {
        width: 50px;
        height: 50px;
        border-radius: 5px;
        background: #e5e7eb;
        color: #6b7280;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 10px;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .step-item.active .step-circle {
        background: linear-gradient(135deg, #14532d 0%, #22c55e 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(20, 83, 45, 0.3);
    }

    .step-label {
        color: #6b7280;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.2;
    }

    .step-item.active .step-label {
        color: #14532d;
    }

    .progress {
        height: 12px;
        background: #e5e7eb;
        border-radius: 5px;
        overflow: hidden;
        margin-bottom: 40px;
    }

    .progress-bar {
        background: linear-gradient(90deg, #14532d 0%, #22c55e 100%);
        transition: width 0.4s ease;
        font-size: 11px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .step {
        display: none;
    }

    .step.active {
        display: block;
        animation: fadeIn 0.4s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .section-title {
        background: #f9fafb;
        padding: 15px 20px;
        border-radius: 5px;
        margin-bottom: 25px;
        border-left: 4px solid #14532d;
    }

    .section-title h5 {
        margin: 0;
        color: #14532d;
        font-weight: 700;
        font-size: 16px;
    }

    .form-label {
        font-weight: 600;
        color: #374151;
        margin-bottom: 8px;
        font-size: 14px;
    }

    .form-control,
    .form-select {
        padding: 12px 16px;
        border: 2px solid #e5e7eb;
        border-radius: 5px;
        font-size: 15px;
        transition: all 0.3s ease;
        background: #f9fafb;
    }

    .form-control:focus,
    .form-select:focus {
        outline: none;
        border-color: #14532d;
        background: white;
        box-shadow: 0 0 0 4px rgba(20, 83, 45, 0.1);
    }

    .form-control.is-invalid,
    .form-select.is-invalid {
        border-color: #ef4444;
        background: #fef2f2;
    }

    .radio-group {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        padding: 15px;
        background: #f9fafb;
        border-radius: 5px;
    }

    .radio-option {
        position: relative;
        padding-left: 35px;
        cursor: pointer;
        font-size: 15px;
        user-select: none;
        font-weight: 500;
        color: #374151;
    }

    .radio-option input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .radio-option .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 22px;
        width: 22px;
        background-color: #e5e7eb;
        border-radius: 5px;
        border: 2px solid #14532d;
        transition: all 0.3s ease;
    }

    .radio-option input:checked~.checkmark {
        background: linear-gradient(135deg, #14532d 0%, #22c55e 100%);
    }

    .radio-option .checkmark::after {
        content: "";
        position: absolute;
        display: none;
    }

    .radio-option input:checked~.checkmark::after {
        display: block;
    }

    .radio-option .checkmark::after {
        top: 6px;
        left: 6px;
        width: 8px;
        height: 8px;
        border-radius: 2px;
        background: white;
    }

    .btn-navigation {
        padding: 14px 30px;
        border-radius: 5px;
        font-weight: 600;
        font-size: 15px;
        transition: all 0.3s ease;
        border: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-prev {
        background: #e5e7eb;
        color: #374151;
    }

    .btn-prev:hover {
        background: #d1d5db;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .btn-next,
    .btn-submit {
        background: linear-gradient(135deg, #14532d 0%, #22c55e 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(20, 83, 45, 0.3);
    }

    .btn-next:hover,
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(20, 83, 45, 0.4);
    }

    .alert-info-custom {
        background: #e0f2fe;
        border-left: 4px solid #0284c7;
        padding: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }

    .alert-info-custom strong {
        color: #0284c7;
    }

    .recap-card {
        background: #f9fafb;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        border: 2px solid #e5e7eb;
    }

    .recap-card h6 {
        color: #14532d;
        font-weight: 700;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid #e5e7eb;
    }

    .recap-item {
        display: flex;
        padding: 8px 0;
        border-bottom: 1px solid #e5e7eb;
    }

    .recap-item:last-child {
        border-bottom: none;
    }

    .recap-label {
        font-weight: 600;
        color: #6b7280;
        min-width: 200px;
    }

    .recap-value {
        color: #374151;
        flex: 1;
    }

    .required-note {
        background: #fef2f2;
        border-left: 4px solid #ef4444;
        padding: 12px 20px;
        border-radius: 5px;
        margin-bottom: 25px;
    }

    .required-note em {
        color: #ef4444;
        font-style: normal;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .registration-body {
            padding: 30px 20px;
        }

        .step-circle {
            width: 40px;
            height: 40px;
            font-size: 16px;
        }

        .step-label {
            font-size: 11px;
        }
    }
</style>
