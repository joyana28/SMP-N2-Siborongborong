@extends('layouts.frontend.app',[
    'title' => 'Visi & Misi',
])
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
  <style>@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
    
    :root {
      --green: #ecfaec;
      --dark-green: #0099ff;
      --white: #ffffff;
      --black: #202020;
    }
    
    ul {
      list-style: none;
    }
    
    a {
      text-decoration: none;
      color: inherit;
    }
    section {
      width: 100%;
      padding: 1em;
    }
    
    section h4 {
      opacity: 0.8;
    }
    
    li.active {
      color: var(--dark-green);
      border-bottom: 1px solid var(--dark-green);
    }
    
    .card {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-auto-rows: auto;
      background-color: var(--white);
      box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset,
        rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
        rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    }
    
    .card-info {
      display: grid;
      grid-template-rows: repeat(3, 1fr);
      padding: 1em 2em;
    }
    .card-info h1 {
      font-family: "Allura", serif;
      font-size: 5rem;
      color: var(--dark-green);
      align-self: center;
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }
    .card-info p, .card-info div {
      font-size: 1rem;
      font-weight: bold;
      align-self: center;
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
      line-height: 22px;
    }
    .card-info a {
      display: grid;
      grid-template-columns: max-content 20px;
      align-items: center;
      column-gap: 7px;
      color: var(--dark-green);
      font-size: 0.85rem;
      font-weight: bold;
      align-self: center;
      justify-self: flex-end;
      transform: translateX(0px);
      transition: transform 0.3s 0.1s ease-out;
    }
    .card-info a:hover {
      transform: translateX(5px);
    }
    .card-info a:hover svg {
      transform: translateX(5px);
    }
    .card-info svg {
      width: 20px;
      height: 10px;
      transform: translateX(0px);
      transition: transform 0.3s ease-out;
    }
    .card-info svg line {
      stroke: var(--dark-green);
    }
    
    .card-photo {
      width: 450px;
      object-fit: cover;
      position: relative;
      overflow: hidden;
    }
    .card-photo img {
      display: block;
      max-width: 100%;
      aspect-ratio: 1/1;
    }
    .card-photo a {
      display: grid;
      grid-template-columns: max-content 20px;
      align-items: center;
      column-gap: 7px;
      color: var(--white);
      font-size: 1rem;
      font-weight: bold;
      letter-spacing: 1px;
      align-self: flex-start;
      transform: translateX(0px);
      transition: transform 0.3s 0.1s ease-out;
      position: absolute;
      z-index: 10;
      bottom: 5%;
      right: 8%;
    }
    .card-photo a:hover {
      transform: translateX(5px);
    }
    .card-photo a:hover svg {
      transform: translateX(5px);
    }
    .card-photo svg {
      width: 20px;
      height: 10px;
      transform: translateX(0px);
      transition: transform 0.3s ease-out;
    }
    .card-photo svg line {
      stroke: var(--white);
      stroke-width: 2;
    }
    .card-photo .mask {
      position: absolute;
      top: 0;
      height: 100%;
      width: 50%;
      z-index: 5;
      background-color: var(--white);
    }
    #mask-1 {
      left: 0;
      transform: translateY(-100%);
    }
    #mask-2 {
      right: 0;
      transform: translateY(100%);
    }
    
    @media (max-width: 600px) {
      .card {
        grid-template-columns: 1fr;
        justify-items: center;
      }
    
      .card-info {
        order: 2;
        height: 400px;
      }
      .card-photo {
        width: 100%;
        order: 1;
      }
    
      .card-photo img {
        width: 100%;
      }
    
      .card-photo .mask {
        height: 100%;
      }
    }
    
    @media (max-width: 500px) {
      header {
        padding: 1em;
        grid-template-columns: 1fr 1fr;
        align-items: flex-start;
      }
      header ul {
        flex-direction: column;
      }
      header li {
        width: min-content;
        margin-right: 0;
      }
      .card-info h1 {
        font-size: 3rem;
      }
    }</style>
</head>
<body>
<div class="container animate__animated animate__backInUp" id="app">
  <section>
    <h4 style="color: #ffffff"> Visi dan  <span>misi kami</span></h4>
  </section>

  <section>
    <div class="card">
      <div class="card-info">
        <h1 id="card-info-title">@{{ currentCard.title }}</h1>
        <div id="card-info-desc" v-html="currentCard.desc"></div>
      </div>
      <div class="card-photo">
        <div id="mask-1" class="mask"></div>
        <div id="mask-2" class="mask"></div>
        <a href="#" @click="nextCard">
          <p style="color: #0099ff;margin-bottom:-3px;font-weight:bold;background-color:#ffffff;border-radius:10px;padding:3px">Next</p>
          <svg viewBox="0 0 20 10">
            <line x1="0" y1="5" x2="20" y2="5" />
            <line x1="15" y1="0" x2="20" y2="5" />
            <line x1="15" y1="10" x2="20" y2="5" />
          </svg>
        </a>
        <img :src="currentCard.photo">
      </div>
    </div>
  </section>
</div>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
<script>
    const { createApp } = Vue;

createApp({
  data() {
    return {
      cards: [
        {
          id: 1,
          title: "Visi kami",
          desc:
            "Terwujudnya sekolah berkualitas, berkarakter dan berwawasan lingkungan",
          photo:
            "/img/picture/visi.jpg"
        },
        {
          id: 2,
          title: "Misi kami",
          desc:
            `<ul>
              <li>1. Mengoptimalkan pembelajaran dan bimbingan belajar secara efektif</li>
              <li>2. Menanamkan disiplin yang tinggi demi kekondusifan sekolah</li>
              <li>3. Menerapkan manajemen partisipatif sesuai MBS</li>
              <li>4. Menciptakan lingkungan yang nyaman dan asri</li>
              <li>5. Meningkatkan profesionalisme personal sekolah dan kemandirian sekolah</li>
            </ul>`,
          photo:
            "/img/picture/visi.jpg"
        }
      ],
      currentNum: 0
    };
  },
  computed: {
    currentCard() {
      return this.cards[this.currentNum];
    }
  },
  methods: {
    playFoward() {
      let tl = gsap.timeline({
        defaults: {
          duration: 0.7,
          ease: "sine.out"
        },
        onComplete: () => {
          this.playReverse();
          if (this.currentNum >= this.cards.length - 1) {
            this.currentNum = 0;
          } else {
            this.currentNum++;
          }
        }
      });
      tl.to("#mask-1", {
        yPercent: 100,
        scaleY: 1.4
      })
        .to(
          "#mask-2",
          {
            yPercent: -100,
            scaleY: 1.4
          },
          "<"
        )
        .to(
          "#card-info-title",
          {
            clipPath: `polygon(0 0, 100% 0, 100% 0%, 0% 0%)`
          },
          "<0.4"
        )
        .to(
          "#card-info-desc",
          {
            clipPath: `polygon(0 0, 100% 0, 100% 0%, 0% 0%)`
          },
          "<0.3"
        );
    },
    playReverse() {
      let tl = gsap.timeline({
        defaults: {
          duration: 0.7,
          ease: "sine.in"
        }
      });
      tl.to("#mask-1", {
        yPercent: -100,
        scaleY: 1.4
      })
        .to(
          "#mask-2",
          {
            yPercent: 100,
            scaleY: 1.4
          },
          "<"
        )
        .to(
          "#card-info-title",
          {
            clipPath: `polygon(0 0, 100% 0, 100% 100%, 0% 100%)`
          },
          "<0.2"
        )
        .to(
          "#card-info-desc",
          {
            clipPath: `polygon(0 0, 100% 0, 100% 100%, 0% 100%)`
          },
          "<0.3"
        );
    },
    nextCard() {
      this.playFoward();
    }
  }
}).mount("#app");
</script>

</body>
</html>
@stop
