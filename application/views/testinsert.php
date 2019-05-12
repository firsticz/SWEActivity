<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('ActivityController/updateActivity') ?>" method="post">
        <div class="row md-12">
            <div class="form-group">
                <input type="text" name="id"/>
            </div>
            <div class="form-group">
                <input type="text" name="activityName"/>
            </div>
            <div class="form-group">
                <input type="text" name="activityDetail"/>
            </div>
            <div class="form-group">
                <input type="text" name="startDate"/>
            </div>
            <div class="form-group">
                <input type="text" name="endDate"/>
            </div>
            <div class="form-group">
                <input type="text" name="studentYear"/>
            </div>
            <div class="form-group">
                <input type="text" name="year"/>
            </div>
            <div class="form-group">
                <input type="text" name="term"/>
            </div>
            <div class="form-group">
                <input type="submit"/>
            </div>
        </div>
    </form>
</body>
</html>