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
                        <select type="text" class="form-control" id="countery"
                            placeholder=" کشور را وارد کنید ">
                            <option value="0">ایران</option>
                            <option value="1">عراق</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <select type="text" class="form-control" id="countery"
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
                    <div class="col-sm-2">
                        <select type="text" class="form-control" id="countery" placeholder="شهر را وارد کنید ">
                            <option value="0"> تهران </option>
                            <option value="0"> مشهد </option>
                            <option value="0"> تبریز </option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="distance_to_capital"
                            placeholder=" فاصله تا پایتخت  را وارد کنید "></input>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="distance_to_countery"
                            placeholder=" فاصله تا مرکز استان  را وارد کنید "></input>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="distance_to_city"
                            placeholder=" فاصله تا مرکز شهر  را وارد کنید ">
                        </input>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control Meterage" id="meterage"
                            placeholder=" متراژ دانشگاه را وارد کنید ">
                        </input>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control age" id="age"
                            placeholder=" قدمت دانشگاه را وارد کنید ">
                        </input>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="number_students"
                            placeholder=" تعداد دانشجو را وارد کنید ">
                        </input>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="number_students_outer"
                            placeholder=" تعداد دانشجویان خارجی را وارد کنید ">
                        </input>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="weather"
                            placeholder=" آب و هوا را وارد کنید ">
                        </input>
                    </div>
                </div>
            </div>
        </table>

    </main>
</body>

</html>