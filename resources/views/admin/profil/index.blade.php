<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Food Website Design Tutorial</title>
    
    <!-- swiper-bundle link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- icon programming language cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
          

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../assets/style.css">

</head>
<body>
    <header>
        <a href="{{route('admin.index')}}" class="logo"><i class="fas fa-archway"></i> l-course</a>
        <nav class="navbar" id="navbar">
            <a class="active nav-link" href="#home">home</a>
            <a class="nav-link" href="#kelas">kelas</a>
            <a class="nav-link" href="#daftar">daftar</a>
            <a class="nav-link" href="#review">review</a>
            <a class="nav-link" href="#contact">contact</a>
            <a href="javascript:void(0);" class="icon" id="btn-nav">&#9776;</a>
        </nav>
    
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
        </div>
    
        <!--  search form   -->
        <form action="" id="search-form">
            <input type="search" placeholder="search here..." name="" id="search-box">
            <label for="search-box" class="fas fa-search"></label>
            <i class="fas fa-times" id="close"></i>
        </form>
    </header>

    <main>
        <div class="flex-row head-content">
            <aside>
                <div class="aside-title">Top Mentor</div>

                <div class="aside-item">
                    <img class="aside-img" src="../assets/images/mentor-1.jpg">
                    <div class="aside-detail">
                        <div class="detail-value">Dwi Wahyu Santoso</div>
                        <div class="detail-value">Andong, Boyolali, Jawa Tengah</div>
                        <div class="detail-value">Programmer</div>
                    </div>
                </div>
                <div class="aside-item">
                    <img class="aside-img" src="../assets/images/mentor-2.jpg">
                    <div class="aside-detail">
                        <div class="detail-value">Muhammad Kurniawan</div>
                        <div class="detail-value">Klego, Boyolali, Jawa Tengah</div>
                        <div class="detail-value">Front End Developer</div>
                    </div>
                </div>
                <div class="aside-item">
                    <img class="aside-img" src="../assets/images/mentor-3.png">
                    <div class="aside-detail">
                        <div class="detail-value">Agung Mangkualam</div>
                        <div class="detail-value">Simo, Boyolali, Jawa Tengah</div>
                        <div class="detail-value">UX Designer</div>
                    </div>
                </div>
                <div class="aside-item">
                    <img class="aside-img" src="../assets/images/mentor-4.jpg">
                    <div class="aside-detail">
                        <div class="detail-value">Hardianto</div>
                        <div class="detail-value">Sumber, Boyolali, Jawa Tengah</div>
                        <div class="detail-value">Full Stack</div>
                    </div>
                </div>
        
                
            </aside>
        
            <article class="home" id="home">
                <div class="home-container">
                    <h1 class="heading"> top kelas </h1>

                    <div class="card">
                        <div class="tx-left card-img">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-plain-wordmark.svg" />
                        </div>
                        <div class="card-caption">{{ $page->content1 ?? 'Di kelas ini, kita akan belajar bagaimana membuat sebuah website dari awal dengan menggunakan HTML. Dengan HTML, kita bisa membuat struktur dan kerangka sebuah website yang terdiri dari beberapa element. HTML juga berfungsi sebagai penampil konten pada website kita.'}}</div>
                    </div>
                    <div class="card card-right">
                        <div class="card-caption">{{ $page->content2 ?? 'Di kelas ini kita akan belajar bagaimana membuat sebuah website menjadi lebih interaktif dengan menambahkan beberapa program yang ditulis menggunakan JavaScript. Dengan JavaScript, kita bisa membuat suatu website untuk mengolah data, menampilkan data, membuat element-element pada website menjadi lebih komunikatif, dan lain sebagainya, sehingga sebuah website bisa ‘berinteraksi’ dengan pengguna.'}}</div>
                        <div class="tx-right card-img">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" />
                        </div>
                    </div>
                    <div class="card">
                        <div class="tx-left card-img">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" />
                        </div>
                        <div class="card-caption">{{ $page->content3 ?? 'Di kelas ini kita akan belajar bagaimana cara memberikan style pada setiap element di website dengan menggunakan CSS, seperti memberikan warna pada element, memposisikan element, memberikan gambar background, membuat tampilan menjadi responsif, dan lain sebagainya. Dengan CSS, website kita akan menjadi lebih cantik, menarik, dan konten di dalamnya akan lebih mudah dipahami oleh pengguna.'}}</div>
                    </div>
                </div>
            </article>
        </div>
        
        <article class="kelas" id="kelas">
            <div class="kelas-container">
                <h1> kelas profesional </h1>

                <div class="flex-row flex-wrap kelas-box">
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain.svg" />
                            <h3>Codeigniter</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <!-- <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a> -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/django/django-plain.svg" />
                            <h3>Django</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <!-- <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a> -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/go/go-original-wordmark.svg" />
                            <h3>Go</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <!-- <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a> -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain.svg" />
                            <h3>Codeigniter</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <!-- <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a> -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/django/django-plain.svg" />
                            <h3>Django</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <!-- <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a> -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/go/go-original-wordmark.svg" />
                            <h3>Go</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <!-- <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a> -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg" />
                            <h3>Jquery</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <!-- <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a> -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
                            <h3>Laravel</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <!-- <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a> -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" />
                            <h3>MySql</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <!-- <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a> -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg" />
                            <h3>Jquery</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <!-- <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a> -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
                            <h3>Laravel</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                    <div class="flex-item-1 flex-p5 kelas-item">
                        <div class="card">
                            <!-- <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a> -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" />
                            <h3>MySql</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$15.99</div>
                            <div class="btn-enroll">enroll</div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="daftar" id="daftar">
            <div class="daftar-container">
                <h1 class=""> buat akun </h1>
                <form action="#">
                    <div class="inputBox">
                        <div class="input">
                            <span>your first name</span>
                            <input type="text" placeholder="enter first name">
                        </div>
                        <div class="input">
                            <span>your last name</span>
                            <input type="text" placeholder="enter your last name">
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>your email</span>
                            <input type="text" placeholder="enter your email">
                        </div>
                        <div class="input">
                            <span>birth day</span>
                            <input type="datetime-local">
                        </div>
                    </div>            
                    <input type="submit" value="daftar sekarang" class="btn" />
                </form>
            </div>
        </article>

        <article class="review" id="review">
            <h1 class="heading"> apa kata mereka </h1>
        
            <div class="swiper-container review-slider">
        
                <div class="swiper-wrapper">
        
                    <div class="swiper-slide slide">
                        <i class="fas fa-quote-right"></i>
                        <div class="user">
                            <img src="../assets/images/user-1.jpg" alt="">
                            <div class="user-info">
                                <h3>marsha</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p>Kelas yang wajib diikuti oleh setiap orang yang ingin terjun ke dunia web programming, khususnya bagi seorang pemula. Materi yang diajarkan sangatlah to the point, singkat, padat dan mudah untuk dimengerti. Materi, kuis, latihan modul dan submissionnya pun sangat menantang dan benar-benar seru untuk diikuti yang membuat seseorang dengan rasa keingintahuan tinggi menjadi lebih semangat dan termotivasi.</p>
                    </div>
        
                    <div class="swiper-slide slide">
                        <i class="fas fa-quote-right"></i>
                        <div class="user">
                            <img src="../assets/images/user-2.jpg" alt="">
                            <div class="user-info">
                                <h3>alex</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p>Dari kelas ini, saya belajar banyak tentang fitur-fitur terbaru dalam dunia web. Materi, latihan, dan submissionnya bikin saya semakin terpacu buat belajar lebih dalam dan mendapat best practice dalam pengerjaannya sehingga lebih siap dalam karir</p>
                    </div>
        
                    <div class="swiper-slide slide">
                        <i class="fas fa-quote-right"></i>
                        <div class="user">
                            <img src="../assets/images/user-3.jpg" alt="">
                            <div class="user-info">
                                <h3>marcel</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p>The content is EXTREMELY outdated. Lots of the implementations only fit the web development environment from FOUR years ago. The course materials were built in 2016. I had to double check at least 70% of the instructions from all kinds of resources because what was taught in the video does not work anymore</p>
                    </div>
        
                    <div class="swiper-slide slide">
                        <i class="fas fa-quote-right"></i>
                        <div class="user">
                            <img src="../assets/images/user-4.jpg" alt="">
                            <div class="user-info">
                                <h3>john</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p>Actually the best online course i hv ever learnt, especially the professor yaakov is quiet outstanding. And a field trip in a online course sounds rare and good!!Thank You</p>
                    </div>

                    <div class="swiper-slide slide">
                        <i class="fas fa-quote-right"></i>
                        <div class="user">
                            <img src="../assets/images/user-5.jpg" alt="">
                            <div class="user-info">
                                <h3>halim</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p>I have learned many things such as HTML , CSS ,Javascript , Basic HTTP, JSON and ajax. I also learned that how to make best website through these languages. It's great journey. I fully enjoyed it</p>
                    </div>

                    <div class="swiper-slide slide">
                        <i class="fas fa-quote-right"></i>
                        <div class="user">
                            <img src="../assets/images/user-6.jpg" alt="">
                            <div class="user-info">
                                <h3>nabil</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p>If you don't want to actually learn what anything means and just get walked through steps on how to do things then take this course. But if you're a beginner to HTML, CSS, and Java Script, this isn't for you. He doesn't actually TEACH you anything, he just takes you through the process. They haven't updated the course content to actually match what is on GitHub's page, so from the start you have to go into the FAQs to figure out where to go from there</p>
                    </div>
        
                </div>
        
            </div>
            
        </article>

        <article class="contact" id="contact">
            <div class="contact-container">
                <div class="flex-row flex-wrap">
                    <div class="flex-item-1 flex-p5 contact-item">
                        <h3>locations</h3>
                        <a href="#">indonesia</a>
                        <a href="#">singapura</a>
                        <a href="#">russia</a>
                        <a href="#">USA</a>
                        <a href="#">kanada</a>
                    </div>
            
                    <div class="flex-item-1 flex-p5 contact-item">
                        <h3>quick links</h3>
                        <a href="#">home</a>
                        <a href="#">kelas</a>
                        <a href="#">daftar</a>
                        <a href="#">reivew</a>
                        <a href="#">contact</a>
                    </div>
            
                    <div class="flex-item-1 flex-p5 contact-item">
                        <h3>contact info</h3>
                        <a href="#">+62 82313935444</a>
                        <a href="#">+62 8895262920</a>
                        <a href="#">dwiwahyussantoso@gmail.com</a>
                        <a href="#">muh_ardiansyah@gmail.com</a>
                    </div>
            
                    <div class="flex-item-1 flex-p5 contact-item">
                        <h3>follow us</h3>
                        <a href="#">facebook</a>
                        <a href="#">instagram</a>
                        <a href="#">tiktok</a>
                        <a href="#">linkedin</a>
                    </div>
                </div> 
            </div>
        </article>
    </main>
    <footer>
        <div class="credit"> copyright @ 2022 by <span>wahyu</span> </div>
    </footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../assets/script.js"></script>

</body>
</html>