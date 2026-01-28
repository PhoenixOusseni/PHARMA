<style>
    body {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
    }

    .profile-container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 15px;
    }

    .profile-card {
        background: white;
        border-radius: 5px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .profile-header {
        background: linear-gradient(135deg, #218838 0%, #28a745 100%);
        padding: 40px 30px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .profile-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50px;
        width: 250px;
        height: 250px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }

    .profile-header::after {
        content: '';
        position: absolute;
        bottom: -50px;
        left: -50px;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }

    .profile-header h2 {
        color: white;
        font-size: 32px;
        font-weight: 700;
        margin: 0 0 10px 0;
        position: relative;
        z-index: 1;
    }

    .profile-status {
        display: inline-block;
        padding: 8px 20px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 25px;
        color: white;
        font-weight: 600;
        position: relative;
        z-index: 1;
        backdrop-filter: blur(10px);
    }

    .profile-body {
        padding: 40px;
    }

    .profile-photo-section {
        text-align: center;
        margin-bottom: 30px;
    }

    .profile-photo {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        border: 5px solid #28a745;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        object-fit: cover;
        margin-bottom: 15px;
    }

    .profile-name {
        font-size: 24px;
        font-weight: 700;
        color: #333;
        margin: 15px 0 10px;
    }

    .profile-role {
        display: inline-block;
        padding: 6px 18px;
        background: linear-gradient(135deg, #218838 0%, #28a745 100%);
        color: white;
        border-radius: 25px;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-code {
        color: #666;
        font-size: 16px;
        margin-top: 10px;
        font-weight: 500;
    }

    .section-card {
        background: #f8f9fa;
        border-radius: 5px;
        padding: 25px;
        margin-bottom: 25px;
        border-left: 4px solid #28a745;
    }

    .section-title {
        font-size: 20px;
        font-weight: 700;
        color: #28a745;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .info-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 15px;
    }

    .info-item {
        padding: 12px;
        background: white;
        border-radius: 5px;
        border-left: 3px solid #28a745;
    }

    .info-item strong {
        color: #28a745;
        display: block;
        margin-bottom: 5px;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .info-item span {
        color: #333;
        font-size: 15px;
    }

    .document-card {
        background: white;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        border: 2px dashed #28a745;
        transition: all 0.3s ease;
    }

    .document-card:hover {
        border-style: solid;
        box-shadow: 0 5px 15px rgba(40, 167, 69, 0.2);
    }

    .document-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 10px;
    }

    .btn-modern {
        border-radius: 5px;
        padding: 12px 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-modern-primary {
        background: linear-gradient(135deg, #218838 0%, #28a745 100%);
        color: white;
    }

    .btn-modern-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(40, 167, 69, 0.4);
        color: white;
    }

    .btn-modern-outline {
        background: white;
        color: #28a745;
        border: 2px solid #28a745;
    }

    .btn-modern-outline:hover {
        background: #28a745;
        color: white;
        transform: translateY(-2px);
    }

    .table-modern {
        background: white;
        border-radius: 5px;
        overflow: hidden;
    }

    .table-modern thead {
        background: linear-gradient(135deg, #218838 0%, #28a745 100%);
        color: white;
    }

    .table-modern thead th {
        border: none;
        padding: 15px;
        font-weight: 600;
    }

    .table-modern tbody td {
        padding: 12px 15px;
        border-bottom: 1px solid #f0f0f0;
    }

    .table-modern tbody tr:hover {
        background: #f8f9fa;
    }

    .action-section {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        margin-top: 30px;
        padding: 25px;
        background: #f8f9fa;
        border-radius: 5px;
    }

    .alert-modern {
        border-radius: 5px;
        border-left: 4px solid #28a745;
        background: #d4edda;
        color: #155724;
        padding: 15px 20px;
        margin-bottom: 25px;
    }

    @media (max-width: 768px) {
        .profile-body {
            padding: 20px;
        }

        .info-row {
            grid-template-columns: 1fr;
        }
    }
</style>
