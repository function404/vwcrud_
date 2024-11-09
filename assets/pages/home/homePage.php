<!-- /**
    * Home page
    *
    * This file contains the home page of website.
    *
*/ -->

<?php
    include '../../includes/header.php';    

    if(isset($_GET['logout'])){
        unset($_SESSION['user']);
        session_destroy();
        header('Location: ../home/homePage.php');
    };
?>

    <main>
        <section class="container-title-home">
            <article class="content-title-home flex-start">
                <div class="info-title-home">
                    <p class="title-home">Hello, <?php echo $_SESSION['user']['name'] ?? 'Usuario' ?>!</p>
                    <p class="subtitle-home">Welcome!</p>
                </div>
            </article>
            <article class="content-title-home flex-end">
                <a class="links-models-home" href="../models/modelsPage.php">
                    <p>
                        Discover more models
                    </p>
                </a>
            </article>
        </section>
        <div class="line"></div>

        <h1 style="font-size: 40px;">Main models</h1>
        <p style="margin-top: 20px; margin-bottom: 20px;"><u>Select one of the models</u></p>

        <section>
        <div class="content-card">
            <ul class="container-ul-card">
                <div class="content-ul-card">
                    <li class="container-li-card">
                        <div class="content-li-card">
                            <div class="info-li-card">
                                <div class="subinfo-li-card">
                                    <div class="img-li-card">
                                        <img src="../../gfx/polo-track.png" alt="">
                                    </div>
                                    <!-- <div class="img-li-card">
                                        <img src="https://media.vw.mediaservice.avp.tech/media/fast/H4sIAAAAAAAA_y2Uu64cRRCG17aMEYERIITI0RGSJap7ZnYuwQrZJkMgB8gEDo6qZ3q6Z7vn1j2XPRsR8TR-CN6DhBcgIoAEiX8lok91marqusz7Pw9P13B48u7dq-___fJzY34vHh8Ol-lwODyC_vG7V-__-uKfDz786Y__1U__Pjxd1qDGR3B58_ijrmej6Txp8_HhGVSHJ4fDs1-A327C4fnzNfiJA_ffNFqt5pOv0-bIbdY0tcjzkltWbVOVzTHTbVoVRaNk3qZpy_pT5PqVvacm78eWY9foqaYgpZwzQYlIjvTVEjpjdLjvw72dJMnsRRKSQMf8xcUR86oFE6sgJ0A3x3kGgpgEcWtXI4lNX5gLsd1kA2WnslUTOyV1QTws5dUQR51fFGA0wyX6YzwD4RgQLD4IB-XC8gKsTbXXQOQS-fYth02xlc4Ayxm1KN4kYio15i0k44YHuHilZANoN0AaVdrDNu4ySlIhSl5ILSy2M9VNKGam2nJiBRDms6BGd2gXNa2VZwVsRkjS9ahbQbpphe6BvWAm3dliqQFf9EfSky1QtY5dsd8Q10pRy41oA7XKHSVTq20WJLDmeHtr4uYh2X1D6NZz7uHiY-mgDF2y3TDKGthiYeByjS0ebZo-RQajh9I0ZJwVDxrYPOo0_bicKzJDm61wmUK6QjnFvIcUuFxuUJW-YTtyRiZORtRk2WXXDPDpVABLhwKt2nJM2uq97CVZ0xzRTwvLAKnr8wG2LqaDIuu4YiDuZcfUDarqW-pCzHxCjrVwDARXGiDOGKNTF4k3OH8VDwW50aZzDmzpOSMXenmF7TYqSJGPNaS4OpTkVpPfgq3WoUvuqpwX5Lk-IqZXNjVMXrMXHvBlhFIPEuV6HVKM2I-hwLb6wMkVnmHD_pCPugxnICb1kfweyrmgnmOOLvUtVzGlvnNpk1DvtEYje7eWaBZa3ReK-tgynjLwVswA0i4MxHJnGgeUIWji3iDtpGwGBGY5nIEmEx0wdkUDrNWZKWDPrpJC4wq8L-iuEyXgN8w96CBxYyEuQt2wZfNKYW0HNCuyyi4SMPl8wyqipahCGZmi5rlLKRpXTRVFy-lVAX1aFxQ7NWRw6XSKVYxeFyGnOHDh8cFgS5xTHIcjDjZOYUYH47QWN2W0maspLm1yXgHUB2mfkhXB0EEcQtxjOWTAtZo0xesqsC-L27IuoWXyKpO0hPbYAHFLsfrL7fcC26bnTdCyrxLFLw-T1IpWzQnGvxor0IlNObkktI1xxlVty1ZdL7R324wj2WPMTEv7ziWmcm17gXFc3Zaq7Fs9bF0Yh14Py-ntz_evX79N7l-Nvrnbu2axJ1kl4s7qztjlVOXijv1k-bSEVd_V3OvAp5dv3yTf3b-8T--FkHc84Ge9dOMQTz_ePrrrx0b7oLcuQnn64Y28M35UjHXbnX6Iel71UOtT8tkTBPoPWuoNuioGAAA.webp?width=648" alt="">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="content-ul-card">
                    <li class="container-li-card">
                        <div class="content-li-card">
                            <div style="background: rgb(41, 71, 103);" class="info-li-card">
                                <div class="subinfo-li-card">
                                    <div class="img-li-card">
                                        <img src="../../gfx/virtus.png" alt="">
                                    </div>
                                    <!-- <div class="img-li-card">
                                        <img src="https://media.vw.mediaservice.avp.tech/media/fast/H4sIAAAAAAAA_y2Uu64cRRCG17aMEYERIITI0RGSJap7ZnYuwQrZJkMgB8gEDo6qZ3q6Z7vn1j2XPRsR8TR-CN6DhBcgIoAEiX8lok91marqusz7Pw9P13B48u7dq-___fJzY34vHh8Ol-lwODyC_vG7V-__-uKfDz786Y__1U__Pjxd1qDGR3B58_ijrmej6Txp8_HhGVSHJ4fDs1-A327C4fnzNfiJA_ffNFqt5pOv0-bIbdY0tcjzkltWbVOVzTHTbVoVRaNk3qZpy_pT5PqVvacm78eWY9foqaYgpZwzQYlIjvTVEjpjdLjvw72dJMnsRRKSQMf8xcUR86oFE6sgJ0A3x3kGgpgEcWtXI4lNX5gLsd1kA2WnslUTOyV1QTws5dUQR51fFGA0wyX6YzwD4RgQLD4IB-XC8gKsTbXXQOQS-fYth02xlc4Ayxm1KN4kYio15i0k44YHuHilZANoN0AaVdrDNu4ySlIhSl5ILSy2M9VNKGam2nJiBRDms6BGd2gXNa2VZwVsRkjS9ahbQbpphe6BvWAm3dliqQFf9EfSky1QtY5dsd8Q10pRy41oA7XKHSVTq20WJLDmeHtr4uYh2X1D6NZz7uHiY-mgDF2y3TDKGthiYeByjS0ebZo-RQajh9I0ZJwVDxrYPOo0_bicKzJDm61wmUK6QjnFvIcUuFxuUJW-YTtyRiZORtRk2WXXDPDpVABLhwKt2nJM2uq97CVZ0xzRTwvLAKnr8wG2LqaDIuu4YiDuZcfUDarqW-pCzHxCjrVwDARXGiDOGKNTF4k3OH8VDwW50aZzDmzpOSMXenmF7TYqSJGPNaS4OpTkVpPfgq3WoUvuqpwX5Lk-IqZXNjVMXrMXHvBlhFIPEuV6HVKM2I-hwLb6wMkVnmHD_pCPugxnICb1kfweyrmgnmOOLvUtVzGlvnNpk1DvtEYje7eWaBZa3ReK-tgynjLwVswA0i4MxHJnGgeUIWji3iDtpGwGBGY5nIEmEx0wdkUDrNWZKWDPrpJC4wq8L-iuEyXgN8w96CBxYyEuQt2wZfNKYW0HNCuyyi4SMPl8wyqipahCGZmi5rlLKRpXTRVFy-lVAX1aFxQ7NWRw6XSKVYxeFyGnOHDh8cFgS5xTHIcjDjZOYUYH47QWN2W0maspLm1yXgHUB2mfkhXB0EEcQtxjOWTAtZo0xesqsC-L27IuoWXyKpO0hPbYAHFLsfrL7fcC26bnTdCyrxLFLw-T1IpWzQnGvxor0IlNObkktI1xxlVty1ZdL7R324wj2WPMTEv7ziWmcm17gXFc3Zaq7Fs9bF0Yh14Py-ntz_evX79N7l-Nvrnbu2axJ1kl4s7qztjlVOXijv1k-bSEVd_V3OvAp5dv3yTf3b-8T--FkHc84Ge9dOMQTz_ePrrrx0b7oLcuQnn64Y28M35UjHXbnX6Iel71UOtT8tkTBPoPWuoNuioGAAA.webp?width=648" alt="">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="content-ul-card">
                    <li class="container-li-card">
                        <div class="content-li-card">
                            <div style="background: rgb(155, 52, 35);" class="info-li-card">
                                <div class="subinfo-li-card">
                                    <div class="img-li-card">
                                        <img src="../../gfx/jetta.png" alt="">
                                    </div>
                                    <!-- <div class="img-li-card">
                                        <img src="https://media.vw.mediaservice.avp.tech/media/fast/H4sIAAAAAAAA_y2Uu64cRRCG17aMEYERIITI0RGSJap7ZnYuwQrZJkMgB8gEDo6qZ3q6Z7vn1j2XPRsR8TR-CN6DhBcgIoAEiX8lok91marqusz7Pw9P13B48u7dq-___fJzY34vHh8Ol-lwODyC_vG7V-__-uKfDz786Y__1U__Pjxd1qDGR3B58_ijrmej6Txp8_HhGVSHJ4fDs1-A327C4fnzNfiJA_ffNFqt5pOv0-bIbdY0tcjzkltWbVOVzTHTbVoVRaNk3qZpy_pT5PqVvacm78eWY9foqaYgpZwzQYlIjvTVEjpjdLjvw72dJMnsRRKSQMf8xcUR86oFE6sgJ0A3x3kGgpgEcWtXI4lNX5gLsd1kA2WnslUTOyV1QTws5dUQR51fFGA0wyX6YzwD4RgQLD4IB-XC8gKsTbXXQOQS-fYth02xlc4Ayxm1KN4kYio15i0k44YHuHilZANoN0AaVdrDNu4ySlIhSl5ILSy2M9VNKGam2nJiBRDms6BGd2gXNa2VZwVsRkjS9ahbQbpphe6BvWAm3dliqQFf9EfSky1QtY5dsd8Q10pRy41oA7XKHSVTq20WJLDmeHtr4uYh2X1D6NZz7uHiY-mgDF2y3TDKGthiYeByjS0ebZo-RQajh9I0ZJwVDxrYPOo0_bicKzJDm61wmUK6QjnFvIcUuFxuUJW-YTtyRiZORtRk2WXXDPDpVABLhwKt2nJM2uq97CVZ0xzRTwvLAKnr8wG2LqaDIuu4YiDuZcfUDarqW-pCzHxCjrVwDARXGiDOGKNTF4k3OH8VDwW50aZzDmzpOSMXenmF7TYqSJGPNaS4OpTkVpPfgq3WoUvuqpwX5Lk-IqZXNjVMXrMXHvBlhFIPEuV6HVKM2I-hwLb6wMkVnmHD_pCPugxnICb1kfweyrmgnmOOLvUtVzGlvnNpk1DvtEYje7eWaBZa3ReK-tgynjLwVswA0i4MxHJnGgeUIWji3iDtpGwGBGY5nIEmEx0wdkUDrNWZKWDPrpJC4wq8L-iuEyXgN8w96CBxYyEuQt2wZfNKYW0HNCuyyi4SMPl8wyqipahCGZmi5rlLKRpXTRVFy-lVAX1aFxQ7NWRw6XSKVYxeFyGnOHDh8cFgS5xTHIcjDjZOYUYH47QWN2W0maspLm1yXgHUB2mfkhXB0EEcQtxjOWTAtZo0xesqsC-L27IuoWXyKpO0hPbYAHFLsfrL7fcC26bnTdCyrxLFLw-T1IpWzQnGvxor0IlNObkktI1xxlVty1ZdL7R324wj2WPMTEv7ziWmcm17gXFc3Zaq7Fs9bF0Yh14Py-ntz_evX79N7l-Nvrnbu2axJ1kl4s7qztjlVOXijv1k-bSEVd_V3OvAp5dv3yTf3b-8T--FkHc84Ge9dOMQTz_ePrrrx0b7oLcuQnn64Y28M35UjHXbnX6Iel71UOtT8tkTBPoPWuoNuioGAAA.webp?width=648" alt="">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
        
    </section>
    </main>

<?php include '../../includes/footer.php'?>