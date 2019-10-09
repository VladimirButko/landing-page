<?php
    include("modules/functions.php");
    include("parts/header.php");
?>

<body>
    <div class="wrapper">
        <div class="preloader"></div>
        <header>
            <div  class="logo" href="#">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPwAAAA8CAMAAAB1nSfhAAAAbFBMVEUAAAAyMjI1Iih3d3cyMjI1IigyMjI1IigyMjI1IigyMjI1IigyMjI1Iig1IigyMjI1IigyMjI1IigyMjI1IigyMjI1IigyMjI1IigyMjI1IigyMjI1IigyMjI1IigyMjI1IigyMjI1Iih3d3djWTBdAAAAIXRSTlMAAAAAEREiIjMzRERVVV1mZnd3iIiZmaqqu7vMzN3d7u73HtzuAAAJEklEQVRoge1ZDXOqvBKuXigCepWICoJAcv//f7z7lZAE29qOb887c9yZKrJJ9nn2K4G+vbGowRjTqHJNcriaQeXrPyAhjqfIXTJvs6S9ERnQbEmXU/pEBI9JhOMpcp9MxL1e5+j1K2h2+HMw6ln2H5UYx1PkPpmZ/BlTDe5c5buG77w2/bPsPyoxjqfIfTKOOyVGJkbP8p0q+HsWgMdkgeMpcp+MI+8cbY1C2g1rGP/LLW+B4ylyn4zlnqHDdzKOjFLJHYx5Zs/9WpY4niL3yVjyCpsh3em50WQUgV8nv8ARSNoY0/+gDj8gY8n3rr1gw+m59s44/nfTfoEjEOxbBKg0KvvGqh+QsfscriobgTI1jDnQDdsjFFbgFNvLoyrKr5NzbakWZ4pDP+UfKlmWOAK52ryADBg+yAAfhLMckHH2/V4fzFE0/szOn/jQQdeeBzA4g4d8oh3amXPbqlLNgfdathEoA1niYOlNnzNnzothXkBU90A4ZUBmtu+VvAkCixl2gMm4Tk6nowFvlNKGylwgcHeKkWf2kGanw32ykcbKUJY4mLHU/9lyFvKeagnCU/pkfPtMnorpL
                Ta5y3gdRQ6v8SMjP7AjKEe9yM+hpfxUFATlOriyuRMoQyEc4a3UQi0ZyAFvGuMARLniQPhKn0xg3x3vpoA8jigVo21syQzk2IYsDJw9XvTmsLGLeA0hn5K6XihDIRzhLbR1GMyAc5VkmpyEfNUChK/0yQT2iXxzl/xuMoer4iTLMSoDzawpQD3n1eFe2BQXR0/zCGov7l8oQ2mW5HFVCJPC/FXisDOns69agPCVPpnAvjvfhWc/OmkB29rkKSsbm/aKGmDDeZWHU/rZc9QnJ4lTvc7kV6QMZYkDQU5gKvfIl2LYVy1A+EqPTGD/zUU+jAPBgEE7c855vQnDjNeK6qqmrDfelMnY3jMRhdxwb8bhKp8sqlC5jHyUD7Qokmgs+WyQjPNVCxC+0iMT2J8f6fwMlk7eYKuednSVU3OjSjoP2PCaoQmOIVTaZDdlnry78jebvy6VoSxxZJSkvSlxNG1ZdAgsY1UMIlB6ZFLfvrfVzW0j48zGh39YhIukoUPOgapHYRaYQx8ED24Lee6KrkJpcaN62SRDZShLHKUYV5iqvJKtjEAVgwiUHpmdb5/JUyLPu1ZPhCkEKZNHtT0uQOXgythO/EePulGyhkT1zCmc4Rw4jwn5SDnjJuwLHDz8YCYkTGGQmrUriSoGESh9Mr59eKDbAXs6w9lIgOK/+Ft2DDVn6I4264l2iz41TIcPJelUK
                +5hjUzgTWLdXPknu4pOPJ4yavgxjpKxprQyPpGbbGfmty2zqoxATJ4y98iUPjhodrnNe0mfs23l+HMwk92gZRXgQJVVS/XUSjJ2x9uwEm+VDE5RvR/I/VNWTiZURuRjHHIyhZYF4bwS+ZT9I8XkVDEIX+mRWfvggDaSTwe7VtnTI8zEYQVfnXc2FXM54+9kr8Gfux03KLiV8i5gvUXvIafaNGdj9xYyESpD7usFDslS+Bpqmput5QXnoAJVDMJXmpnMOrJPVS9BZSml79b4Erm2zwrYSvhZBslP9vQMrf+sqPHLiZK2QoBGb6Ch2mtekTE3kTIiv45xSH+6TmCBIi+NwQxZoFqA8JUemXVk33uwMy7r3Ol/SOcme0350WLHnqQpvR2pJL8UP1lBz8VMuWb2UHq4q1xIhIMSBuqcIotLgLtKrMVQtQThz/PJhPbdK8xp9rftJ4aPHMqtTK9B5ZxH95XNZ9xK8H3zWebS0/8hW8+PIzw6Ut5hH+Jg23ye2JngcOCrFiB8ZUDGs+/91yKjnHavSMqr6ZX82wQOxpNKxfe83asQQ/i67cwbo2QyHAsOHynvSIQDi8u+uyr74OHdUy1B+PMCMs7+my+fIXJMeNNI/ddIsPDvvum7Jz8A8faSl7zkJS95yd8g//m+/GnId+QHLJDHX03+f9+Wfyf5H/H4qyP/kpe85CV/m6y+Ixut/5GxvyiW9/vppsfL9uF5xUXr7h8Y+6si3DejJjk9OG2PY5Pnj/1dkbiPutu8vUOE9g/NKrSuHqXznbG/LEz+qMcEa/4C6QlgoQA2q9W21frGuCkr6LugWSd9uYAOrlpd8UJ+VeOw5AgO3QZjafbmBh/vnGdwte20vrzblffRIqt5zAa1x+JGixY8H0db5e1WnPSIZizuSowUNG4/Mg2kVgjYN62BdaePruFhpADtalXdWljmuMJ+dWsD8lIk1SfkOxqx98fibaivwoEvsCTaGxqjlU/xIuCkhMoGQG/wYuRpM3mn7FhXzbgD8nv8gPKrWrAWkodJPvnVVoOfIB6wwEi3qpWQ79rTlr6T5IQ6WKu97JfktwiIRsxj4Tb2FoylbpkduaKFD/iRdDpa5L3DcSN0DNBdZCm8IvT04ZQFevoY49byuddMviBqcKdtT4WL/
                InIJ4X1KnhwA87kgFd6a8mzTsMNDEsBwFHamLymlEm03nhjYebIyV4JeRtBp4sXuVGOJuguAl/xlSM/KwvMn4SSy+F25PdayDN8MVsx+SOg9Gq+wh6QjPpY3Wj6kdBJKqJTRyRE1FpOws2SvK3yeSzVgZC/WPIVyjvpuipcpLvh7sMMtjZy8HsMyK8s+ZYNergdeWgGNu2RGt5PLnpk8tDtx31RULenGS0C66QKkxu415FHSyfIP/i4rSz5Ik57cNE7Z+E8lnqA5kSvrGfQR9Tw9CUpokUoXzCzVzbtwY+XOO1XkvYdZ/uMeyY/bgrnvI67AJDXTN7f56kgIFDgwa6TlLTtBWsezb3z8C3SwDHEbNWOhcOduIY3j8U2sJJa2fIVJMINOp5kdBEtgo7zehoC6UbMoZm8UyLFDleZcTvy4P3CwgcVegJHnIQ8nfA0dS4qCNyaig62lRNV+EweTOCBZYOHNtzIji2eDCl0TMDiTk6y1c1jET85RtsUxdPfqNtjshq3EqlwkRHdZ3czuAUgb9uVR94pC1TSVudwW/LA3ZJHavvVBqN7OyaW/Gdne07Gr4/ne/3+1ZCv5bNF7E57T4qv8S3kkQebqpo/P5P9o4fjny7yJ8j/a+RF/gP5Mfn/A/j+EXGPLd3dAAAAAElFTkSuQmCC" alt="Логотип">
            </div>
            <nav>
                <a href="#about" class="the-main">Главная</a>
                <a href="#price" class="price-list">Прайс-лист</a>
                <a href="#photo" class="the-photo">Фотографии</a>
                <a href="#biography" class="about-me">Биография</a>
                <a href="#contacts" class="the-contacts">Контакты</a>
            </nav>
            <div class="burger">
                <div class="burger-line"></div>
            </div>
        </header>
        <main>
            <div class="content-box isee" id="about">
                <div class="content-box-conteiner animate-show">
                    <h1>"Девушка ведущая?"</h1>
                    <p>МОЙ ВЫБОР НЕ ИЗМЕНЕН- СВЕТА СОКОЛОВА!))</p>
                    <p>Именно по этой причине я ВСЕГДА САМА организовываю, сочиняю и провожу все свои многочисленные праздники для семьи и друзей! За всех девочек не скажу, но за себя всегда отвечу! Если женщина ОГОНЬ, то она лучше ЛЮБОГО МУЖЧИНЫ)</p>
                    <p>Женщине природой заложен  таллант параллельно заниматься несколькими делами, держать во внимании всё и всех и не пропускать ни единой мелочи... Быть ответственной, обаятельной, чуткой, милой.</p>
                    <p>Хвалить себя не буду! Лучше один раз увидеть, чем сто раз услышать!Звоните, буду рада СЛУЖИТЬ ВАШЕМУ ВЕСЕЛЬЮ!</p>
                </div>
                <button class="btn-content animate-show">Оставить заявку</button>
            </div>
        </main>
        <div class="biography-box isee" id="biography">
            <div class="biography-box-content">
                <h1>
                    <span>Ведущая Светлана Соколова</span>
                </h1>
                <div class="slider">
                    <div class="slider-box">
                        <div class="slider-box-slide"></div>
                        <div class="slider-box-slide normal">
                            <p>- Актриса театра и кино, сценарист, режиссер-постановщик, организатор, идеолог, ведущая праздничных мероприятий различного характера и масштаба и просто красивая женщина.</p>
                            <p>- Каждый праздник в моем исполнении – это «ювелирное изделие ручной работы», т.к. моё главное творческое кредо – создание эксклюзивного мероприятия, в постановке которого найдут отражение все индивидуальные пожелания, оригинальные умения, таланты, вкусы и «шифры» виновников торжества.</p>
                        </div>
                        <div class="slider-box-slide normal">
                            <p>- Моя цель – талантливый праздник на всех этапах его подготовки. Шаг за шагом я пройду этот пусть вместе с заказчиком в слаженном тандеме, ведь я работаю только с теми людьми, к которым чувствую взаимную симпатию, в которых вижу творческих единомышленников! Поверьте, это путь к по-настоящему успешному, грандиозному шоу! Вы – раскроете передо мной свои таланты и способности, а я – смогу превратить их в главную изюминку праздника.</p>
                        </div>
                        <div class="slider-box-slide normal">
                            <p>- Красивые значимые торжества нашей жизни должны остаться с нами не только яркими воспоминаниями, но и сохраниться для будущих поколений Вашей семьи в виде фотоальбомов и качественных видеофильмов. В моей команде несколько лет работают профессиональные видеооператоры и фотографы – люди, которые будут незаметны во время Вашего праздника, но воплотят в фильме о Вас все трогательные и важные моменты торжества!</p>
                        </div>
                        <div class="slider-box-slide normal">
                            <p>- Я имею обширный опыт создания тематических вечеринок – поэтому Ваш праздник мы реализуем в формате, близком Вам по духу и настроению, будь то Ваш любимый кинофильм, книга, мультфильм Диснея, историческая эпоха или национальная культура отдельной страны.</p>
                        </div>
                        <div class="slider-box-slide normal">
                            <p>- Воплощая концепцию Вашего праздника, я использую широкое разнообразие жанров – это не только традиционные конферанс и стенд-ап, но также танцы, песни, пародии, видеоролики и фотоколлажи, смонтированные к мероприятию на основе Ваших материалов! Поверьте, блистать на сцене буду не только я – в свете прожекторов окажутся как гости, так и виновники торжества, наделенные неординарными талантами!</p>
                            <p>- Праздник для меня – это феерия, удовольствие, кайф, каждое мероприятие в моем исполнении – это полное погружение, а не набор отработанных заученных приемов. Если Вы разделяете мою позицию – вместе мы совершим нечто грандиозное!</p>
                        </div>
                        <div class="slider-box-slide"></div>
                    </div>
                    <div class="slider-arrow">
                        <div class="slider-arrow-item left"></div>
                        <div class="slider-arrow-item right"></div>
                    </div>
                    <div class="slider-bullets">
                        <div class="slider-bullets-item active"></div>
                        <div class="slider-bullets-item"></div>
                        <div class="slider-bullets-item"></div>
                        <div class="slider-bullets-item"></div>
                        <div class="slider-bullets-item"></div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="gallery isee" id="photo">
                <h1>Галерея</h1>
                <div class="gallery-box">
                    <?php
                        $sql = "SELECT * FROM `images` WHERE active = 1";
                        $result = mysqli_query($db, $sql);
                    ?>
                    <?php while( $row = mysqli_fetch_assoc($result) ) :?>
                        <div class="gallery-box-item">
                            <div class="gallery-box-item-pic" style="background-image: url(<?=$row['img_src']?>)"></div>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
            <div class="price-box isee"id="price">
                <div class="price-box-container animate-show">
                    <h2>Свадьбы, юбилеи, корпоративы</h2>
                    <div class="price-box-container-content">
                        <div class="text">
                            <p>Ведущая с конкурсной программой (без DJ)<br><span>45000 руб.</span></p>
                            <p>DJ+Cвет+Звук<br><span>15000 руб.</span></p>
                            <p>Разработка индивидуального сценария<br><span>5000 руб.</span></p>
                            <p>Репетиции. Съемка сюрприза или клипа к празднику.<br><span>5000 руб.</span></p>
                        </div>
                    </div>
                    <h3>Цена действительна при количестве гостей до 50 человек</h3>
                    <p class="time">Время работы: 6 часов</p>
                    <button class="btn-price">Заказать услугу</button>
                    <div class="price-form">
                        <div class="price-form-content">
                            <h3>Готовы заказать услугу? Мы ждем вашего заказа</h3>
                            <form action="/handlers/service-order.php" method="POST" class="service-order">
                                <input name="" id="name" placeholder="Ф.И.О" required>
                                <input name="" id="email" placeholder="E-mail" required>
                                <textarea type="comment" name="" id="comment" placeholder="Какую услугу вы выбрали?" required></textarea>
                                <input class="price-btn" type="submit" value="Заказать услугу">
                                <div class="price-form-content-cansel"></div>
                            </form>
                            <div class="price-form-content-message"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="popup-box isee" id="contacts">
            <h1 class="animate-show">Оставить заявку</h1>
            <form action="/handlers/order-application.php" method="POST"  class="order animate-show">
                <input  name="" id="name" placeholder="Ф.И.О" required>
                <input  name="" id="phone" placeholder="Телефон" required>
                <input  name="" id="email" placeholder="E-mail"required>
                <textarea name="comment" id="comment" placeholder="Комментарий" required></textarea>
                <input class="order-btn" type="submit" value="Оставить заявку">
            </form>
            <div class="popup-box-message"></div>
        </div>
<?php include("parts/footer.php"); ?>