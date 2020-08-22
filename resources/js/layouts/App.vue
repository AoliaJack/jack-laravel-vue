<template>
    <div>

        <section class="p-b-sm p-t-sm is-hidden-touch">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <p>Gratis E-book 9 Cara Cerdas Menggunakan Domain</p>
                    </div>
                </div>
                <div class="level-right">
                    <div class="level-item">
                        <a href="#" class="has-text-grey"><img :src="'/images/phone.png'" alt="" width="20px"><span>0274-5305505</span></a>

                    </div>
                    <div class="level-item">
                        <a href="#" class="has-text-grey"><img :src="'/images/forum.png'" alt="" width="20px"><span>Live Chat</span></a>

                    </div>
                    <div class="level-item">
                        <a href="#" class="has-text-grey"><img :src="'/images/account.png'" alt="" width="20px"> <span>Member Area</span></a>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <nav class="navbar" role="navigation" aria-label="main navigation">
          <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item" href="#">
                  <img :src="'/images/niagahoster-logo.png'" height="70">
                </a>
                    <a href="#" class="has-text-grey navbar-item is-hidden-desktop"><img :src="'/images/forum.png'" alt="" width="20px"></a>
                    <a href="#" class="has-text-grey navbar-item is-hidden-desktop"><img :src="'/images/account.png'" alt="" width="20px"></a>


                <a role="button" class="navbar-burger burger" @click="showNav = !showNav" :class="{ 'is-active': showNav }" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
                </a>
              </div>

              <div id="navbarBasicExample" class="navbar-menu" :class="{ 'is-active': showNav }">
                <div class="navbar-start">



                </div>

                <div class="navbar-end">
                  <div class="navbar-item">
                      <a class="navbar-item">
                        Hosting
                      </a>
                      <a class="navbar-item">
                        Domain
                      </a>
                      <a class="navbar-item">
                        Server
                      </a>
                      <a class="navbar-item">
                        Website
                      </a>
                      <a class="navbar-item">
                        Afiliasi
                      </a>
                      <a class="navbar-item">
                        Promo
                      </a>
                      <a class="navbar-item">
                        Pembayaran
                      </a>
                      <a class="navbar-item">
                        Review
                      </a>
                      <a class="navbar-item">
                        Kontak
                      </a>
                      <a class="navbar-item">
                        Blog
                      </a>
                  </div>
                </div>
              </div>
          </div>

    </nav>

    <router-view></router-view>

    <section class="hero is-dark footer">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-variable is-8">
                <div class="column">
                    <h6 class="title-medium m-b-md is-6 has-text-grey">HUBUNGI KAMI</h6>
                    <ul>
                        <li>0274-5305505</li>
                        <li>Senin - Minggu</li>
                        <li>24 Jam Nonstop</li>
                        <li>  </li>
                        <li>Jl. Selokan Mataram Monjali Karangjati MT I/304
                        Sinduadi, Mlati, Sleman, Yogyakarta 55284</li>
                    </ul>
                </div>
                <div class="column">
                    <h6 class="title-medium m-b-md is-6 has-text-grey">LAYANAN</h6>
                    <ul class="list-footer">
                        <li><a href="#">Domain</a></li>
                        <li><a href="#">Shared Hosting</a></li>
                        <li><a href="#">Clod VPS Hosting</a></li>
                        <li><a href="#">Managed VPS Hosting</a></li>
                        <li><a href="#">Web Builder</a></li>
                        <li><a href="#">Keamanan SSL / HTTPS</a></li>
                        <li><a href="#">Jasa Pembuatan Website</a></li>
                        <li><a href="#">Program Affiliasi</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h6 class="title-medium m-b-md is-6 has-text-grey">SERVICE HOSTING</h6>
                    <ul>
                        <li><a href="#">Hosting Murah</a></li>
                        <li><a href="#">Hosting Indonesia</a></li>
                        <li><a href="#">Hosting Singapura SG</a></li>
                        <li><a href="#">Hosting PHP</a></li>
                        <li><a href="#">Hosting Wordpress</a></li>
                        <li><a href="#">Hosting Laravel</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h6 class="title-medium m-b-md is-6 has-text-grey">TUTORIAL</h6>
                    <ul>
                        <li><a href="#">Knowledgebase</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Cara Pembayaran</a></li>
                    </ul>
                </div>
            </div>
            <div class="columns  is-variable is-8">
                <div class="column">
                    <h6 class="title-medium m-b-md is-6 has-text-grey">TENTANG KAMI</h6>
                    <ul>
                        <li><a href="#">Tim Niagahoster</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Penawaran & Promo Spesial</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h6 class="title-medium m-b-md is-6 has-text-grey">KENAPA PILIH NIAGAHOSTER?</h6>
                    <ul>
                        <li><a href="#">Support Terbaik</a></li>
                        <li><a href="#">Garansi Harga Termurah</a></li>
                        <li><a href="#">Domain Gratis Selamanya</a></li>
                        <li><a href="#">Datacenter Hosting Terbaik</a></li>
                        <li><a href="#">Review Pelanggan</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h6 class="title-medium m-b-md is-6 has-text-grey">NEWSLETTER</h6>
                    <div class="field has-addons">
                      <p class="control">
                        <input class="input is-rounded" type="text" placeholder="Email">
                      </p>
                      <p class="control">
                        <a class="button is-rounded is-info">
                          Berlangganan
                        </a>
                      </p>
                    </div>
                </div>
                <div class="column">
                    <div class="level">
                        <div class="level-item">
                            <a href="#"><figure class="image is-64x64"> <img :src="'/images/facebook-black.png'" alt="" class="is-rounded border-img"> </figure></a>
                        </div>
                        <div class="level-item">
                            <a href="#"><figure class="image is-64x64"><img :src="'/images/twitter-black.png'" alt="" class="is-rounded border-img"></figure> </a>
                        </div>
                        <div class="level-item">
                            <a href="#"><figure class="image is-64x64"><img :src="'/images/google-plus-black.png'" alt="" class="is-rounded border-img"></figure> </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="columns">
                <div class="column">
                    <h6 class="title-medium m-b-md is-6 has-text-grey">PEMBAYARAN</h6>
                    <p class="has-text-grey">Aktifasi instan dengan e-Payment Hosting dan domain langsung aktif!</p>
                </div>
            </div>
            <hr class="bfooter">
            <div class="columns">
                <div class="column is-three-quarters">
                    <p class="is-size-7 p-content">
                        Copyright @2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC
                        Biznet Technovillage Jakarta
                    </p>
                    <p class="is-size-7 p-content">
                        Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
                    </p>
                </div>
                <div class="column">
                    <p class="p-content">
                        <a href="#">Syarat dan Ketentuan</a> |
                        <a href="#">Kebijakan Privasi</a>
                    </p>

                </div>
            </div>

        </div>
    </div>

</section>
    </div>

</template>
<script>
export default {
data: function() {
    return {
        showNav: false
    }
}
}
</script>
