<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>افزودن مخاطب جدید</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>به صفحه اضافه کردن مخاطبین خود خوش آمدید</h1>
    
    <form action="ActionAddContact.php" method="post">
        <fieldset>
            <legend>اطلاعات شخصی</legend>
            
            <label for="firstName">نام:</label>
            <input type="text" id="firstName" name="firstName" placeholder="لطفا نام مخاطب را وارد نمایید" required>
            <br><br>
            
            <label for="lastName">نام خانوادگی:</label>
            <input type="text" id="lastName" name="lastName" placeholder="لطفا نام خانوادگی مخاطب را وارد نمایید" required>
            <br><br>
            
            <label for="phoneNumber">شماره تماس:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="مثال: 09123456789" required>
            <br><br>
            
            <label for="email">ایمیل:</label>
            <input type="email" id="email" name="email" placeholder="مثال: example@domain.com">
            <br><br>
        </fieldset>
        
        <fieldset>
            <legend>اطلاعات اضافی</legend>
            
            <label for="address">آدرس:</label>
            <textarea id="address" name="address" placeholder="لطفا آدرس کامل را وارد نمایید" rows="3"></textarea>
            <br><br>
            
            <label for="city">شهر:</label>
            <input type="text" id="city" name="city" placeholder="نام شهر">
            <br><br>
            
            <label for="postalCode">کد پستی:</label>
            <input type="text" id="postalCode" name="postalCode" placeholder="۱۰ رقمی">
            <br><br>
            
            <label for="company">شرکت:</label>
            <input type="text" id="company" name="company" placeholder="نام شرکت">
            <br><br>
            
            <label for="jobTitle">سمت:</label>
            <input type="text" id="jobTitle" name="jobTitle" placeholder="سمت شغلی">
            <br><br>
            
            <label for="birthdate">تاریخ تولد:</label>
            <input type="date" id="birthdate" name="birthdate">
            <br><br>
            
            <label for="notes">یادداشت:</label>
            <textarea id="notes" name="notes" placeholder="یادداشت های خود را اینجا وارد کنید" rows="3"></textarea>
            <br><br>
        </fieldset>
        
        <button type="submit">ذخیره مخاطب</button>
        <button type="reset">پاک کردن فرم</button>
    </form>
</body>
</html>