<!DOCTYPE html>
<html>
<head>
    <title>About - Penyewaan Villa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
        .team-member {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            text-align: center;
        }
        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .team-member h4 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .team-member p {
            color: #666;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Tim Kami</h2>

        <div class="row">
            <div class="col-md-6">
                <div class="team-member">
                    <img src="<?php echo base_url('assets/images/person1.jpg'); ?>" alt="Person 1">
                    <h4>3411201005 - Muhammad Raqil Salman </h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="team-member">
                    <img src="<?php echo base_url('assets/images/person2.jpg'); ?>" alt="Person 2">
                    <h4>3411201036 - Hira Nur Afifah</h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="team-member">
                    <img src="<?php echo base_url('assets/images/person3.jpg'); ?>" alt="Person 3">
                    <h4>3411201038 - Muhammad Ihsan Maulana</h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="team-member">
                    <img src="<?php echo base_url('assets/images/person4.jpg'); ?>" alt="Person 4">
                    <h4>3411201040 - Iqbal Prayoga</h4>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>