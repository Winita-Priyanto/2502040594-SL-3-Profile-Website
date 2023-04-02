<!doctype html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wini's Profile | SL 3 Web Programming</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-black h-full">
    <!-- NAVBAR -->
    <header class="fixed top-0 z-10 bg-stone-400 w-full flex items-center px-20 py-5 justify-around text-[#FAF6F2] font-sans text-l">
        {{-- <router-link to="/" class="hover:text-black hover:font-bold">ABOUT ME</router-link> --}}
        <a href="#BIO" class="hover:text-black hover:font-bold">ABOUT ME</a>
        <a href="#INTERESTS" class="hover:text-black hover:font-bold">PERSONAL INTERESTS</a>
        <a href="#EDUCATION" class="hover:text-black hover:font-bold">EDUCATION BACKGROUND</a>
        <a href="#EXPERIENCES" class="hover:text-black hover:font-bold">EXPERIENCES</a>
        <a href="#CONTACTS" class="hover:text-black hover:font-bold">CONTACT ME</a>
    </header>
    <div class="mt-[64px]"></div>
    <div class="flex">
        <!-- SIDEBAR -->
        <div class="fixed bg-white flex h-full"style="background-image:url(Wini-Sidebar.png)">
            <h1 class="mt-20">
                <div class="flex-col items-center text-white font-sans mt-20 w-[520px]">
                    <div class="mx-10 fill-none border-solid border-2 border-[white] border-opacity-20">
                        <img class="p-10 rounded-full mx-auto" src="Test-Img.JPG">
                        <div class="text-center mb-10">
                            <div class="text-xl mb-2">WINITA TEUKEKU PRIYANTO</div>
                            <div class="text-l text-[#FFC831]">PPTI 12</div>
                        </div>
                    </div>
                </div>    
            </h1>
        </div>
        <!-- MAIN PAGE -->
        <!-- ABOUT ME -->
        <div class="ml-[520px]"></div>
        <main class="flex-1"id="BIO">
            <div class="bg-stone-400 opacity-100 text-stone-800 font-sans p-20 h-[820px]">
                <div class="font-bold text-2xl">WINI'S BIO</div>
                <div class="z-10 bg-stone-800 mt-10 h-[570px]">
                    <div class="text-white text-center p-10 font-sans font-light">
                    <div class="font-bold">Full Name</div>Winita Teukeku Priyanto
                    <hr class="h-px my-5 bg-white border-0">
                    <div class="font-bold">Student ID</div>2502040594
                    <hr class="h-px my-5 bg-white border-0">
                    <div class="font-bold">Gender</div>Female
                    <hr class="h-px my-5 bg-white border-0">
                    <div class="font-bold">Place of Birth</div>Jakarta
                    <hr class="h-px my-5 bg-white border-0">
                    <div class="font-bold">Date of Birth</div>February 6th, 2004
                    <hr class="h-px my-5 bg-white border-0">
                    <div class="font-bold">Status</div>Private
                    </div>
                </div>
            </div>
        </main>
    </div>

    {{-- INTERESTS --}}
    <main class="flex-1 ml-[400px]"id="INTERESTS">
        <div class="p-20 h-[820px] w-full flex font-sans font-bold"style="background-image:url(Wini.jpg)"id="INTEREST">
            <div class="text-right w-full text-white">
                <div class="text-2xl">HOBBIES AND INTERESTS</div>
                <div class="text-left ml-40 text-l font-sans font-light">
                    <br><div class="flex items-center"><img class="w-10 h-10 mr-3" src="com.png">Community Involvement</div>
                    <br><div class="flex items-center"><img class="w-10 h-10 mr-3" src="lang.png">Learning Languages</div>
                    <br><div class="flex items-center"><img class="w-10 h-10 mr-3" src="photography.png">Photography</div>
                    <br><div class="flex items-center"><img class="w-10 h-10 mr-3" src="travel.png">Travel</div>
                    <br><div class="flex items-center"><img class="w-10 h-10 mr-3" src="sports.png">Sports</div>
                    <br><div class="flex items-center"><img class="w-10 h-10 mr-3" src="music.png">Music</div>
                    <br><div class="flex items-center"><img class="w-10 h-10 mr-3" src="arts.png">Arts</div>
                    <br><div class="flex items-center"><img class="w-10 h-10 mr-3" src="data-science.png">Data Science</div>
                    <br><div class="flex items-center"><img class="w-10 h-10 mr-3" src="business analyst.png">Business Analyst</div>
                </div>
            </div>
        </div>
    </main>
    
    {{-- EDUCATION BACKGROUND --}}
    <main class="flex-col ml-[520px]"id="EDUCATION">
        <div class="bg-stone-400 p-20 h-[820px] w-full flex-col text-stone-800 font-sans"id="EDUCATION BACKGROUND">
            <div class="font-bold text-2xl">EDUCATION BACKGROUND</div>
                <div class="ml-[150px] z-10 bg-stone-800 mt-10 w-[500px] h-[580px]">
                    <div class="text-white text-left p-[30px] font-sans font-light text-l">
                        <div class="font-bold mt-3">2009-2013</div>Ketapang II Christian School Jakarta
                        <hr class="h-px my-5 bg-white border-0">
                        <div class="font-bold">2013-2015</div>Abdi Siswa Catholic Elementary School Jakarta
                        <hr class="h-px my-5 bg-white border-0">
                        <div class="font-bold">2015-2018</div>Abdi Siswa Catholic Junior High School Jakarta
                        <hr class="h-px my-5 bg-white border-0">
                        <div class="font-bold">2018-2021</div>Abdi Siswa Catholic Senior High School Jakarta
                        <hr class="h-px my-5 bg-white border-0">
                        <div class="font-bold">2018-2021</div>SPIRIT 888 Public Speaking Course
                        <hr class="h-px my-5 bg-white border-0">
                        <div class="font-bold">2021-presents</div>PPTI BCA Scholarship Program | SoCS BINUS University
                </div>
            </div>
        </div>
    </main>
    
    {{-- EXPERIENCES --}}
    <main class="flex-1 ml-[400px]"id="EXPERIENCES">
        <div class="bg-stone-500 p-20 h-[820px] w-full flex text-center text-white font-sans"style="background-image:url(Wini.jpg)"id="EXPERIENCES">
            <div class="text-right w-full text-white">
                <div class="font-bold text-2xl">ORGANIZATIONAL EXPERIENCES</div>
                <div class="text-left ml-40 text-l font-sans font-light">
                    <br><div class="font-bold mt-5">2018-2019</div>Vice President of High School Student Council
                    <br><div class="font-bold mt-5">2019-2020</div>President of High School Student Council Supervisor
                    <br><div class="font-bold mt-5">2019</div>Public Relation Division of ACXI 2019
                    <br><div class="font-bold mt-5">2020</div>Head of "Don't Limit Your Challenges, Challenge Your Limits"
                    <br><div class="font-bold mt-5">2021</div>Secretary of SIGNAL 2021, Treasurer of PPTI 12
                    <br><div class="font-bold mt-5">2022</div>Secretary of SPARK 2022, Secretary of MP 2022
                    <br><div class="font-bold mt-5">2022</div>Vice President of Band Extracurricular 2022
                    <br><div class="font-bold mt-5">2019-presents</div>HOTK Indonesia Music Team
                    <br><div class="font-bold mt-5">2023-presents</div>President of Band Extracurricular 2023
                </div>
            </div>
        </div>
    </main>
    
    {{-- CONTACT ME --}}
    <main class="flex-1 ml-[520px]"id="CONTACTS">
        <div class="bg-stone-400 p-20 h-[820px] w-full flex-col text-stone-800 font-sans"id="EDUCATION BACKGROUND">
            <div class="font-bold text-center text-2xl">LET'S GET IN TOUCH!</div>
                <div class="ml-[50px] z-10 bg-stone-800 my-20 w-[700px] h-[400px] rounded-3xl">
                    <div class="flex items-center"><img class="w-20 h-40 ml-[100px]" src="anya.png">
                        <div class="text-white text-left p-[30px] font-sans font-light text-l">
                            <br><div class="mt-7"><div class="flex items-center"><img class="w-10 h-10 mr-3 ml-[40px]" src="instagram.png">Instagram Account: @winiitaprynt</div></div>
                            <br><div class="flex items-center"><img class="w-10 h-10 mr-3 ml-[40px]" src="email.png">Email Address: winita.priyanto@binus.ac.id</div>
                            <br><div class="flex items-center"><img class="w-10 h-10 mr-3 ml-[40px]" src="github.png">GitHub: Winita-Priyanto</div>
                            <br><div class="flex items-center"><img class="w-10 h-10 mr-3 ml-[40px]" src="spotify.png">Spotify Account: Wini</div>
                        </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>