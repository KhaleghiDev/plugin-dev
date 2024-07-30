<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <img class="logo_edutsn" src="<?= EDUTSN_LOGO ?>" whith="28px" hegint="28px">
        <h1 class="edutsn-title wp-heading-inline">مدیریت دانشگاه ها </h1>
    </header>
    <main>
        <table>
            <div class="mx-2">
                <div class="mb-3 row">
                    <div class="col-sm-12">
                        <input type="text" class="form-control title" id="title"
                            placeholder=" عنوان دانشگاه را وارد کنید ">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-12">
                        <textarea type="text" class="form-control textarea" id="inputPassword"
                            placeholder=" توضیحات دانشگاه را وارد کنید " maxlength="250"></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-2">
                        <select type="text" class="form-control" id="countery" placeholder=" کشور را وارد کنید ">
                            <option value="0">ایران</option>
                            <option value="1">عراق</option>
                        </select>
                    </div>
                    <div class="col-sm-2 box-input">
                        <select type="text" class="form-control" name="state" id="state"
                            placeholder=" استان را وارد کنید ">
                            <option value="0"> تهران </option>
                            <option value="1">خراسان شمالی </option>
                            <option value="2">خراسان رضوی </option>
                            <option value="3">خراسان جنوبی </option>
                            <option value="4">اصفهان</option>
                            <option value="5">آذربایجان شرقی </option>
                            <option value="6">آذربایجان غربی </option>
                        </select>
                    </div>
                    <div class="col-sm-2 box-input">
                        <select type="text" class="form-control" name="city" id="city" placeholder="شهر را وارد کنید ">
                            <option value="0"> تهران </option>
                            <option value="0"> مشهد </option>
                            <option value="0"> تبریز </option>
                        </select>
                    </div>
                    <div class="col-sm-2 box-input">
                        <input type="text" class="form-control" name="distance_to_capital" id="distance_to_capital"
                            placeholder=" فاصله تا پایتخت  را وارد کنید "></input>
                    </div>
                    <div class="col-sm-2 box-input">
                        <input type="text" class="form-control" name="distance_to_countery" id="distance_to_countery"
                            placeholder=" فاصله تا مرکز استان  را وارد کنید "></input>
                    </div>
                    <div class="col-sm-2 box-input">
                        <input type="text" class="form-control" name="distance_to_city" id="distance_to_city"
                            placeholder=" فاصله تا مرکز شهر  را وارد کنید ">
                        </input>
                    </div>
                    <div class="col-sm-2 box-input">
                        <input type="text" class="form-control Meterage" name="meterage" id="meterage"
                            placeholder=" متراژ دانشگاه را وارد کنید ">
                        </input>
                    </div>
                    <div class="col-sm-2 box-input">
                        <input type="text" class="form-control age" name="age" id="age"
                            placeholder=" قدمت دانشگاه را وارد کنید ">
                        </input>
                    </div>
                    <div class="col-sm-2 box-input">
                        <input type="text" class="form-control" name="number_students" id="number_students"
                            placeholder=" تعداد دانشجو را وارد کنید ">
                        </input>
                    </div>
                    <div class="col-sm-2 box-input">
                        <input type="text" class="form-control" name="number_students_outer" id="number_students_outer"
                            placeholder=" تعداد دانشجویان خارجی را وارد کنید ">
                        </input>
                    </div>

                    <div class="col-sm-2 box-input">
                        <input type="text" class="form-control" id="Professor" name="Professor"
                            placeholder=" تعداد اساتید  پرفسور را وارد کنید ">
                        </input>
                    </div>
                    <div class="col-sm-2 box-input">
                        <input type="text" class="form-control" id="coach" name="coach"
                            placeholder=" تعداد کل مربی  را وارد کنید ">
                        </input>
                    </div>
                    <div class="col-sm-2 box-input">
                        <input type="text" class="form-control" id="metro" name="metro" placeholder=" هزینه مترو ">
                        </input>
                    </div>
                    <div class="col-sm-2 box-input">
                        <input type="text" class="form-control" id="separate_consulate" name="separate_consulate"
                            placeholder=" کنسولی مجزا ">
                        </input>
                    </div>
                    <div class="col-sm-2 box-input">
                        <select type="text" class="form-control select2" name="option[]" id="option"
                            placeholder="امکانات مورد نیاز" multiple="multiple">
                            <option value="0">خوابگاه برادران </option>
                            <option value="1">خوابگاه خواهران </option>
                            <option value="2">آزمایشگاه </option>
                            <option value="3">سالن ورزشی </option>
                            <option value="4"> زمین چمن </option>
                            <option value="5"> کتابخانه </option>

                        </select>
                    </div>
                    <div class="col-sm-2 box-input">
                        <select type="text" class="form-control select2" name="categories[]" id="categories"
                            placeholder="دسته بندی" multiple="multiple">
                            <option value="1"> وزارت بهداشت </option>
                            <option value="2"> وزارت علوم </option>
                        </select>
                    </div>
                    <div class="col-sm-2 box-input">
                        <select type="text" class="form-control select2" name="air[]" id="air"
                            placeholder=" داشتن فرودگاه" multiple="multiple">
                            <option value="1"> دارد </option>
                            <option value="2"> ندارد </option>
                        </select>
                    </div>
                    <div class="col-sm-2 box-input">
                        <select type="text" class="form-control select2" name="train_station[]" id="train_station"
                            placeholder=" داشتن ایستگاه قطار" multiple="multiple">
                            <option value="1"> دارد </option>
                            <option value="2"> ندارد </option>
                        </select>
                    </div>
                    <div class="col-sm-2 box-input">
                        <select type="text" class="form-control select2" name="weather" id="weather"
                            placeholder=" اقلیم آب هوایی " multiple="multiple">
                            <option value="1"> اقلیم گرم و خشک </option>
                            <option value="2"> اقلیم سرد کوهستانی </option>
                            <option value="3"> اقلیم سرد کوهستانی </option>
                            <option value="4"> اقلیم معتدل و مرطوب </option>
                            <option value="4"> اقلیم گرم و مرطوب </option>
                        </select>
                    </div>
                    <div class="col-sm-2 box-input">
                        <select type="text" class="form-control select2" name="recycle" id="recycle"
                            placeholder=" بازیافت " multiple="multiple">
                            <option value="1"> انجام میشه </option>
                            <option value="2"> با انجام میشه </option>
                            <option value="3"> با کیفیت بالا انجام میشه </option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                <div class="input_fields_wrap">
                        <h2> رشته به دانشگاه ها </h2>
                        <button class="add_field_button btn btn-success my-3">اضافه کردن رنکنیگ جدید</button>
                        <div class="boxMajors">
                            <select name="Majorst[]">
                                <option value="0">لیست رشته ها </option>
                                <option value="1">مهندسی کامپیوتر </option>
                                <option value="2">علوم انسانی</option>
                            </select>
                            <input type="text" name="mytext[1]">
                        </div>
                        <div class="boxOrientation">
                            <select name="Orientation[]">
                                <option value="0">لیست گرایش ها </option>
                                <option value="1">مهندسی نرم افزار </option>
                                <option value="2">مربی آموزشی</option>
                            </select>
                            <input type="text" name="myBachelor" placeholder="هزینه مقطع کارشناسی">
                            <input type="text" name="myMaster" placeholder="هزینه مقطع کارشناسی ارشد">
                            <input type="text" name="myDoctoral " placeholder="هزینه مقطع دکترا">
                            <input type="text" name="myBachelor" placeholder="هزینه مقطع دکترا تخصصی  (M.D.) ">
                            <input type="text" name="myBachelor" placeholder="هزینه مقطع دکترا تخصصی  حقوق (J.D.) ">
                            <input type="text" name="myBachelor"
                                placeholder="هزینه مقطع دکترا تخصصی  دندانپزشکی  (D.D.S.) ">
                            <input type="text" name="myBachelor"
                                placeholder="هزینه مقطع دکترا تخصصی  دارو سازی  (Pharm.D.) ">
                        </div>
                    </div>
                    <div class="input_fields_wrap">
                        <h2>امتیاز دانشگاه ها </h2>
                        <button class="add_field_button btn btn-success my-3">اضافه کردن رنکنیگ جدید</button>
                        <div class="boxRanking">
                        <label for="files">انتخاب استاندارد :</label>
                            <select placeholder=" عنوان رنکینگ " name="myselect[1]">
                                <option value="0">امتیاز</option>
                                <option value="1">Qs</option>
                                <option value="2">شانگهای</option>
                            </select>
                            <label for="files">امتیاز کسب شده :</label>
                            <input type="text" name="mytext[1]">
                        </div>
                    </div>
            
                    <div class="input_fields_wrap">
                        <h2> گالری دانشگاه ها </h2>
                        <button class="add_field_button btn btn-success my-3">باکس آپلود جدید</button><br>
                        <label for="files">انتخاب فایل :</label>
                        <input type="file" id="files" name="files[]" multiple><br><br><br><br>

                        <input type="submit" class="btn btn-success" name="uploadFile">

                    </div>
                </div>
            </div>
            </div>
        </table>

    </main>
</body>


</html>