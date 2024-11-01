<!-- /**
    * Home page
    *
    * This file contains the home page of website.
    *
*/ -->

<?php include '../includes/header.php'?>

<main>
    <h1>Home page</h1>
    <h4>Hello World!</h4>
    <p>This is <b>Home</b> page!</p>
    <section>
        <div class="content-card">
            <ul class="container-ul-card">
                <div class="content-ul-card">
                    <li class="container-li-card">
                        <div class="content-li-card">
                            <div class="info-li-card">
                                <div class="subinfo-li-card">
                                    <div class="img-li-card">
                                        <img src="https://media.vw.mediaservice.avp.tech/media/fast/H4sIAAAAAAAA_y2Uu84cNRTHN4kSEEhBgBCiRyukSBx77lusUBI6BEqBQpHi0_GMx56152bP5fu24jl4hjwE70HDC1DR0CDxX4nqp3Px8fG5-P1fh6drODx59-7VD_9-9YUxf5SPD4f76XA4PIL-8btX7__-8p9nH_785__qZx8fni5rUOMjuLx5_FHXs9F0mbT55PABVIcnh8MHvwK_34TD8-dr8BMH7r9ttFrNp98kGRcZZ6puVZtngk8Fy1K3qUgKbvOqrJtWcZ4mnx0OT39j76kp-rHlNGvDOCxTTUFKOWeCEpHk9PUSOmN0uOvDnZ0kyexFEpJAefHi3hHzqgUTqyAnQDf5PANBTIK4tauRxKYvzT2x3WQDZaeyVRM7JXVJPCzV1RBHXdwrwGiGS_R5vAAhDwgWH4SDcmF5D6zNaa-ByBXu27cCNsVWOgMsF-SieJOIqdRYtJCMGx7g4pWSDaDdAGlUaQ_buMsoSYUoeSG1sNguVDehnJlqy4kVQJgvghrdpQjWtFZeFLAZIUnXo24F6aYVugf2kpl0Z8ulBnzZ56QnWyJrHbtyvyGuJ0UtN6IN1CqXS6ZW2yxIYC3w9tbEzUOy-4bQrefCw8XHykEZumS7YZQ1sMXSwOUaWzzaNH2KG4weKtOQcVY8aGDzyNP043I5kRnabIXLFNIVyikWPaTA1XKDOukbtpwzMnEyoibLLrtmgE-nElg6JGjVVqDTVu9VL8maJkc9LSwDpK4vBti6mA6KrOMTA3GvOqZuUKe-pS7EzCfkWAvHQHCVAeKMNjp1L_EG56_ioSQ32nQugC29ZORCL6-w3VoFKXJeQ4qrQ0puNcUt2GodquSuynlBnuscMb2yqWHymr3wgK8ilHqQSNfrkKLFfgwlptUHTq7wDBvmh3zUVbgAMalz8nuo5pJ6jgWq1Ld8iin1nUubhHqnNQrZu7VCsVDqvlTUx5bxlIG3cgZw7cJArHamcUAagibuDa6dlM2AwCyHC9BkogPGrmyA9XRhCpizq6TQuBLvC7rrRAX4DX0POkjsWIiLUDds2bxSWNsBxYqssnsJmGK-YRXRUlShikxR89ylFI07TSeKltOrAvq0Lil2asjg0ukUoxi9LkNBceDS48BgK6xTHIccCxunMKOCcVrLmzLazNUUlza5rADyg7RPyYpgqCAWIe6xGjLgepo0xesqMC-L27IuoWXyKpO0hDZvgLilGP3l9r3Atul5E7Tsq0Tyy8MktaJVc4L2r8YKVGJTTi4JbWOcsVXbsp2u97R324wl2WPMTEv7zhW6cm17gXZc3Zaq7Ds9bB3-vV4Py_ntL3evX79N7l6NvjnuXbPYszwl4mh1Z-xyPhXiyH6yfF7Cqo819zrw-eXbN8n3dy_vkjsh5JEH_NdLNw7x_NPt0DEuWoduMDwYr88yP_Zjo33QWxfhdf7xjTwaPyrG_O1OP0Q9r3qo9Tn5_Aki_wfRxOlyPgYAAA.webp?width=648" alt="">
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


<?php include '../includes/footer.php'?>