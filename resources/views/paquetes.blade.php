<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylePaquetes.css">
    <title>Document</title>
</head>
<body>
    @include('header')
    <div class="divPrincipalBody">

        <div class="container">

            <div class="step completed">
                <div class="v-stepper">
                    <div class="circle"></div>
                    <div class="line"></div>
                </div>

                <div class="content">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
            </div>

            <div class="step active">
                <div class="v-stepper">
                    <div class="circle"></div>
                    <div class="line"></div>
                </div>

                <div class="content">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
            </div>

            <div class="step empty">
                <div class="v-stepper">
                    <div class="circle"></div>
                    <div class="line"></div>
                </div>

                <div class="content">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                </div>
            </div>

            <div class="step">
                <div class="v-stepper">
                    <div class="circle"></div>
                    <div class="line"></div>
                </div>

                <div class="content">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
            </div>
        </div>
    </div>

</body>
@include('footer')
</html>
