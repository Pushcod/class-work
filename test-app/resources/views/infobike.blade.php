@extends('layout.master')
@section('content')
    <div class="container welcome__container">
        <div class="welcome__inner">
            <div class="welcome__welblock">
                <h1 class="welcome__title">Добро Пожаловать <br class="br">{Имя пользователя}</h1>
                <p class="welcome__des">Вы зашли на сайт ГБПОУ «Волгоградский технический колледж» сервис дистанционного обучения</p>
            </div>
            <div class="welcome__courses courses">
                <div class="courses__title-block">
                    <h2 class="courses__title">Курсы:</h2>
                </div>
                <ul class="courses__list">
                    <li class="courses__items">
                        <div class="courses__img-2"><div class="courses__h-img"><i class='bx bxs-objects-vertical-bottom'></i></div></div>
                        <div class="courses__padblock">
                            <div class="courses__nameblock">
                                <h3 class="courses__name">Экономика и бухгалтерский учёт</h3>
                            </div>
                            <div class="courses__descrebblock">
                                <p class="courses__description">{описание курса}</p>
                            </div>
                            <div class="courses__progress">
                                <div class="courses__prog-block">
                                    <i class='bx bxs-food-menu'></i>
                                    <p class="courses__x-books">000</p>
                                </div>
                                <div class="courses__prog-block">
                                    <i class='bx bx-male' ></i>
                                    <p class="courses__x-student">000</p>
                                </div>
                            </div>
                            <div class="courses__buttonblock">
                                <a href="kurslist.html" class="courses__button"title="Перейти к курсу">Перейти</a>
                            </div>
                        </div>
                    </li>
                    <li class="courses__items">
                        <div class="courses__img"><div class="courses__h-img"  ><i class='bx bx-heart' ></i></div></div>
                        <div class="courses__padblock">
                            <div class="courses__nameblock">
                                <h3 class="courses__name">Иностранный язык</h3>
                            </div>
                            <div class="courses__descrebblock">
                                <p class="courses__description">{Описание Курса}</p>
                            </div>
                            <div class="courses__progress">
                                <div class="courses__prog-block">
                                    <i class='bx bxs-food-menu'></i>
                                    <p class="courses__x-books">000</p>
                                </div>
                                <div class="courses__prog-block">
                                    <i class='bx bx-male' ></i>
                                    <p class="courses__x-student">000</p>
                                </div>
                            </div>
                            <div class="courses__buttonblock">
                                <a href="kurslist.html" class="courses__button" title="Перейти к курсу">Перейти</a>
                            </div>

                        </div>
                    </li>
                    <li class="courses__items">
                        <div class="courses__img-3"><div class="courses__h-img"><i class='bx bx-football' ></i></div></div>
                        <div class="courses__padblock">
                            <div class="courses__nameblock">
                                <h3 class="courses__name">Физическая культура</h3>
                            </div>
                            <div class="courses__descrebblock">
                                <p class="courses__description">{описание курса}</p>
                            </div>
                            <ul class="courses__progress">
                                <li class="courses__prog-block">
                                    <i class='bx bxs-food-menu'></i>
                                    <p class="courses__x-books">000</p>
                                </li>
                                <li class="courses__prog-block">
                                    <i class='bx bx-male' ></i>
                                    <p class="courses__x-student">000</p>
                                </li>
                            </ul>
                            <div class="courses__buttonblock">
                                <a href="kurslist.html" class="courses__button"title="Перейти к курсу">Перейти</a>
                            </div>
                        </div>
                    </li>
                    <li class="courses__items">
                        <div class="courses__img-4"><div class="courses__h-img"><i class='bx bxs-folder' ></i></div></div>
                        <div class="courses__padblock">
                            <div class="courses__nameblock">
                                <h3 class="courses__name">Методические материалы</h3>
                            </div>
                            <div class="courses__descrebblock">
                                <p class="courses__description">{описание курса}</p>
                            </div>
                            <ul class="courses__progress">
                                <li class="courses__prog-block">
                                    <i class='bx bxs-food-menu'></i>
                                    <p class="courses__x-books">000</p>
                                </li>
                                <li class="courses__prog-block">
                                    <i class='bx bx-male' ></i>
                                    <p class="courses__x-student">000</p>
                                </li>
                            </ul>
                            <div class="courses__buttonblock">
                                <a href="kurslist.html" class="courses__button"title="Перейти к курсу">Перейти</a>
                            </div>
                        </div>
                    </li>
                    <li class="courses__items">
                        <div class="courses__img-5"><div class="courses__h-img"><i class='bx bxs-cog' ></i></div></div>
                        <div class="courses__padblock">
                            <div class="courses__nameblock">
                                <h3 class="courses__name">Механизация</h3>
                            </div>
                            <div class="courses__descrebblock">
                                <p class="courses__description">{описание курса}</p>
                            </div>
                            <ul class="courses__progress">
                                <li class="courses__prog-block">
                                    <i class='bx bxs-food-menu'></i>
                                    <p class="courses__x-books">000</p>
                                </li>
                                <li class="courses__prog-block">
                                    <i class='bx bx-male' ></i>
                                    <p class="courses__x-student">000</p>
                                </li>
                            </ul>
                            <div class="courses__buttonblock">
                                <a href="kurslist.html" class="courses__button"title="Перейти к курсу">Перейти</a>
                            </div>
                        </div>
                    </li>
                    <li class="courses__items">
                        <div class="courses__img-6"><div class="courses__h-img"><i class='bx bx-bot' ></i></div></div>
                        <div class="courses__padblock">
                            <div class="courses__nameblock">
                                <h3 class="courses__name">Автоматизация</h3>
                            </div>
                            <div class="courses__descrebblock">
                                <p class="courses__description">{описание курса}</p>
                            </div>
                            <ul class="courses__progress">
                                <li class="courses__prog-block">
                                    <i class='bx bxs-food-menu'></i>
                                    <p class="courses__x-books">000</p>
                                </li>
                                <li class="courses__prog-block">
                                    <i class='bx bx-male' ></i>
                                    <p class="courses__x-student">000</p>
                                </li>
                            </ul>
                            <div class="courses__buttonblock">
                                <a href="kurslist.html" class="courses__button"title="Перейти к курсу">Перейти</a>
                            </div>
                        </div>
                    </li>
                    <li class="courses__items">
                        <div class="courses__img-7"><div class="courses__h-img"><i class='bx bxs-tree' ></i></div></div>
                        <div class="courses__padblock">
                            <div class="courses__nameblock">
                                <h3 class="courses__name">Землеустойство</h3>
                            </div>
                            <div class="courses__descrebblock">
                                <p class="courses__description">{описание курса}</p>
                            </div>
                            <ul class="courses__progress">
                                <li class="courses__prog-block">
                                    <i class='bx bxs-food-menu'></i>
                                    <p class="courses__x-books">000</p>
                                </li>
                                <li class="courses__prog-block">
                                    <i class='bx bx-male' ></i>
                                    <p class="courses__x-student">000</p>
                                </li>
                            </ul>
                            <div class="courses__buttonblock">
                                <a href="kurslist.html" class="courses__button"title="Перейти к курсу">Перейти</a>
                            </div>
                        </div>
                    </li>
                    <li class="courses__items">
                        <div class="courses__img-8"><div class="courses__h-img"><i class='bx bxs-edit-alt' ></i></div></div>
                        <div class="courses__padblock">
                            <div class="courses__nameblock">
                                <h3 class="courses__name">ДПП ПК</h3>
                            </div>
                            <div class="courses__descrebblock">
                                <p class="courses__description">{описание курса}</p>
                            </div>
                            <ul class="courses__progress">
                                <li class="courses__prog-block">
                                    <i class='bx bxs-food-menu'></i>
                                    <p class="courses__x-books">000</p>
                                </li>
                                <li class="courses__prog-block">
                                    <i class='bx bx-male' ></i>
                                    <p class="courses__x-student">000</p>
                                </li>
                            </ul>
                            <div class="courses__buttonblock">
                                <a href="kurslist.html" class="courses__button"title="Перейти к курсу">Перейти</a>
                            </div>
                        </div>
                    </li>
                    <li class="courses__items">
                        <div class="courses__img-9"><div class="courses__h-img"><i class='bx bx-universal-access' ></i></div></div>
                        <div class="courses__padblock">
                            <div class="courses__nameblock">
                                <h3 class="courses__name">Miscellaneous</h3>
                            </div>
                            <div class="courses__descrebblock">
                                <p class="courses__description">{описание курса}</p>
                            </div>
                            <ul class="courses__progress">
                                <li class="courses__prog-block">
                                    <i class='bx bxs-food-menu'></i>
                                    <p class="courses__x-books">000</p>
                                </li>
                                <li class="courses__prog-block">
                                    <i class='bx bx-male' ></i>
                                    <p class="courses__x-student">000</p>
                                </li>
                            </ul>
                            <div class="courses__buttonblock">
                                <a href="kurslist.html" class="courses__button"title="Перейти к курсу">Перейти</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
@endsection
