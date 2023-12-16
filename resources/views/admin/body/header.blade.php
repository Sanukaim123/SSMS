<nav class="navbar">

				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
              <div class="input-group-text">
                <i data-feather="search"></i>
              </div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
					
			


						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{route('messages.display')}}" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="mail"></i>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="messageDropdown">

                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="" alt="userr">
                    </div>
                   
                 
                 
                  
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="" alt="userr">
                    </div>

                   

					

							
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
								<div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p>6 New Notifications</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="gift"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>New Order Recieved</p>
											<p class="tx-12 text-muted">30 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="alert-circle"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Server Limit Reached!</p>
											<p class="tx-12 text-muted">1 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>New customer registered</p>
											<p class="tx-12 text-muted">2 sec ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="layers"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Apps are ready for update</p>
											<p class="tx-12 text-muted">5 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="download"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Download completed</p>
											<p class="tx-12 text-muted">6 hrs ago</p>
                    </div>	
                  </a>
                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="wd-30 ht-30 rounded-circle" src="data:image/jpeg;base64,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" alt="profile">
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
								<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
									<div class="mb-3">
										<img class="wd-80 ht-80 rounded-circle" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAKoAtQMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAABQQGAQMHAgj/xABIEAABAwMCAgYFCAcHAgcAAAABAgMEAAURBiESMRMiQVFhcQcUQoGxMjZSdJGhstEVFiM3YnLBJDM1c4KS8DThFydDRFRk8f/EABoBAQACAwEAAAAAAAAAAAAAAAABBAIDBQb/xAA2EQACAQIDBQcCBgEFAQAAAAAAAQIDEQQhMRJBUWFxBRMiMoGh8DSxFJGywdHx4TNScoKiFf/aAAwDAQACEQMRAD8A7jRRRQBRRRQBRRWDQGa8OLS2grWoJSBkknAFVHWmv7XpdC2j/arhjKYrR3His+yK5TJmav8ASE5xuuGPb+LZIyhkeG26zWmrXhSjtSdixSw06meiOnag9KGm7OpTLUhc+Qnbgi9YA+Kjt9mapUz0u364q4LDaG29+akqdV92BXq16Es1rZ6a4K9cW2MqU91Wk9+w/qad2m7WaWv1a0yoqlAf3TQxt4ctvtrj1u2cm6UXJLfuL8MJSjqrlYXd/SfOypLj0dPPPC00B9u9YDnpM4ApF2UsDlwyGt6cS0zdTxX24cluJbS4torUgqW/wnCuWOFOQRtvt2UvevFxs9vltRY1vQi0BtLjAQsh1tR2Ukk9XtyDnfNalj8TPJbO1wz93fibe7p/7UaRqj0lWoZksuSEp5lbCXAf9lM7b6Z3WnA1e7OUqA3UwrB/2q/OpV01A7CQw9Ggl9pTRefcLvClkcIUArbmRyrQ7ddOXlxqLMaSoyU5aXJYKUuHvSvGM+VZUu08Qo7U6d1y/gxlQpS1RfdPa1sGoAE26enpu1h0cDg/0nn7tqsXdXCLx6OWFHpbLKXHdByGnd0jyVzH315s+vtTaPlNwNQMrlxRth09cJ70L9ryP3V08Nj6OI8rzKlTBNZwO9VmlGnr/bdQwxMtUkOoOy0nZTZ7lDsptV4otNOzM0UUUICiiigCiiigCiiigCiisHlvQGCdq5l6S/SKbUpdmsCkuXNR4XXkdYMZ7B3r8OymfpU1idM2hMaEsC5SwQ2e1pHavz7B41R9BaY9WbF3uieKY6ONpKz/AHYO/ET3mqWNxkcNT2nqXcLh9vxy0NWmNDDiFw1Hl6Q51ww4rO57VntJ7qvaAEhKQEoSkYCUjGB3eHlVWVfnLteHINomBCmXuEgIzxJT8txRPs+ykDfJpxdb5brS8lmfKDRUniTxDYjOPj8K8pivxFaotvNvdw9Dpor0iLPu12egS7ihxtuUVrYT12m2QnKONOOeeHtOaTMupuxgPwmWE3eLcA30kJoJS+yOayByAHby3xV1u1ht12IekKeRxoHSFp1TYcQPpY5+dJZOqbDp9pMCzRxJdT1eijcs+Kt8+7NWqNdzilSjeXC1kuN+osC7Pqa0ypKLBKiLgvuKcSiRzbJ54rU3o65vR5aZ9yZdXcFoVNc6M5wk5AScjbl2VhFy1tcevFtseC0rkXhuR5n8q2FjXyBxplW5Z58O35U2q0dZwT9Lg93GBNtN0elw7IxdWXSlSMqAcZUlITjB5jYEd2TSGQmTMtKLUUKXdZFxMgsoSrEMZJOTjq99NVarv1oOb/YytrteY7B39o+8VZLLqG231pRhPhSsdZpeywO7H5ZFHUr0YqUobSVs076aX+K4sRo+pEPNLkoiyVW1pXRqnBSeHI2KuHOSnPbims+DFuUUx57CH2lDkobA947Qe3NVj9TpzPTwYd4LVnfUS5HLfWCSdwD3VaJMiNb4qn33Usx2xzcVjA7qp11SUk6Dz5X+X6BHPLjaLtoa5JvOn33TFScLz7I+i4B8pPj/AFrsGhtYQtW28PMYaltD+0RlHrIPeO8HsNVmJdrZcCWG3gSsH9m4go4x244gMjyqh3mJM0Pf2b5YlARFr2SD1R3tnvSezu91dzs7tCbfdVlaX3/yV6+HVVXWp9E1mlWm7zGv9oj3KEf2byclJ5oV2pPiDTWu8chpp2YUUUUICiiigCiiigCsLwE78qzSrVclUPTF2koGVNQ3VJ8+E4qHoSld2OGJdVrn0iSJbxC4TKipIPLokHCB/qO/vNWfVFx6ZxNhtylqlSFIQ5wK4eBBySCezIB3pP6JoqU26dKKeutxKB5JGfiTXpwMqvM2ZAjrS6HUvNXBcdSscWUlKkg8RSeE4UAce4Z8ziJ99i5bWkNOvM7ySirIiToE2HqS1tWb1G3vuMrQyWTxIcSOYUCPA7nmRT2Vp6MIT8y/TQ68ttIlSFgABsKzwoHs921LtGRWk3Zc+5RW0Tpzjioy204QgjPGgDsVzPLlWm7uvaw1J+ho6yi2Q1ZkrR7ZHP8AIDzrXUc3VUL2UVnL149cuoPLsi663krjwFKgWNs8KnMYLuOzx8hsO2mRXpzRYEaMyZFwWMcCBxvKPZn6I8qkXmc7E9W05pllCZikYyMcMVv6R8e3760W5Fm0wxHfKJUybOWpBeDfE6pY+UDnl8fOsG9qKVmo7orV85Mkyl3WV2IW2iLZ2FcgsBxw+45+ArCLbqla3Ux9TNuOMkBSFxU8JOAR7PlTWLqOFKlsxltSo63SUtqkNAJWodmc86mQf+uuWefTJz58AqvKrOF700suCe/ncFdXqG92bbUlsS9FJwZcIZA/mSa0TNNWq/Mi66XkIjSc8QWwrhTxdxHNJq7HkcjIqnTbO5DmSrxpVssuMuFEiLnDckD5QSO8H76yoV1J3h4Jf+Xya3fYaHvTep5Kphsmok9BckHhQtQwHvs2z9x7K9ekND6YkCaltTkeHLS7IbByCnIxnw7KxcocLXFiRKggtzGx+yJ2U2sewrwz+db9EXxd5trkOekeuxT0T6Vpzxp5bjv5g1k0oS/ERjZxfijw5rl9gaL9drHfLXHaZcbkvPPN+rsp/vEqyM5+iAM5psrTsP8AQj9obLnqzoPD0qyvold4J32O/wBtI2W0s6vkWyxw4MBbLIdU+priWsbAgDsHW7O6p2kZdxck3GDdpPTSI6+txYHCST8n6SMAb7HOairFwpLunZLxWbzz05Ai+hC6v2+/z9OTCpPGFOISr2XEHCh7xv8A6a7ZXBQBB9MVvdb5vvIV/uSUmu8DGa9Xhave0lPicrGRSqX4nqiiirBUCiiigCiiigCkWuvmZe/qLv4TT2kWu/mXfPqLv4TUPQyj5kcn9HDiWdJTHVnCUOOKJ7gE0vtt9vNgbjvTreiWJ8dr1cNr4FJCchAI8vDtrbpB5pjQF0cfGW+JxKveAP61Fuj0FWiOmS3Bemr6klx7Z7izsW874wRjltXm9hSrVFKN1KVjvPUZJgXi2xZF+ukpPEyy7IZiJBHRPO7b+XF3n892jENWDRb92e3deSqQs94GyB/X3mpurmyz6P5DanC6UxmR0ivlK6ydzUO5pC9C2aPnqPrjNr8ioZqt3jrU0pb5Wy4LP97gaaNtzke3mfLObjcf2761cwDuEjwweX5VvmQIr9wEWayh6LKX0jfECOjfSMHBH0k7+aVVKedXAkqU+oqhOqA4j/6K+QH8p28j51F1g46xp6W9HP8AaUBKmVA4KV8QAI+2qalOde9/N7f19gVGLo83h2bIjPtw2EzVtpbShR6LoyACk5xk+Ip5a5kizXd623N5T7D7wQ1OWMEr4BhCx5dvfTjTUePHs0duIlYBypZcOVFz2+L+LOQfKtEq3oujN4hOL4C66OFf0FBCSlXuIB91b54p1JSp1PKsuazS+cSBlcJKokJx5ABc5NoPIrJwkfbivUGOIURqOhXEWxus+0eaifMkk+dI7TOkXC4NwLigMTLflbqM5Dh5IWnvGMnw2p1MlNxGErUCpSyEtNJ3U4o8gPE/dVOpSlC1Pe8/49s/Ukrj7f6v6sjyGU8MG7no3k9iHh8lXv8AzqBPQLL6SIchpOGbojgcH8R2P38JqfqyK4jTTsl9YXKbkNSCoE8KSFDAT4AZHjzPOo2u8fpvTKva9cTg/wCpNdCg9txvndSi+dlf50BnWMdiNe4lyXcHbW4pkoTMQ1xoUR7BHYccj2791atJvNzdRdJbVPvwozC0Oy3ti+6tXET8dqbajlynbxCskd1tgSm3HVOqSlZJT8lI4gQPfWqxT5bl7cgFY6FhlIdYMcIUwvAzlQ6qsnJGOwikZS/CZ629r9P3t7EbxXdf3r2L+dn4mu7iuEXX961i/wAxn4mu7ivQdm/TQ6HOx/nXQzRRRV8ohRRRQBRRRQBSLXXzMvf1J38Jp7SLXfzLvn1F38JqHoZR8yOS+jxuM7o+aicAYxcX0mT2YG9aLhPtiXwZjs5xpsIaW+u2J4me1KVL27CMbbZrboMoTom5F1KlIBd4gk4JHDWXpzL+hr0p+XGkOqdUFON7BSuFHDgfZv4V5h/UVNX4rfnv0O89RxrpxD2i7g60QW1obUlQ5EFScY76gT/mjp76xF+NeLolY9FKA7npBEa588caf+1e53zS09t/7iL8ar0Y7MYx4Tf2J3FweQhxCm3UhTakkKSeRB7KqV3Wp26W+wOcTjSZTbnGv2mwlaghXiCB5/bVhdfkw1rVJQZEbiJ6VpPWaH8Se7xH2dtIZcRu5ayjnpwY7kL1hpbShkqSeEEHsxxZ91V8JHZbctLN+pDHzSDGubiUIPq8odKP4HBgH7Rj3g99bEoTEVMkuL6i1dIr+EBAH9K9wzJVHAlpQXkq4VEcnB2KA7M93Z8dUS6Qpsh+LGktuyGVFLje4UMHB2PMZ7arPad7K9tQVSdb59tek6nSuI46pCXVoeQouNJ5FCMbfJx7xVngIXLWm4yBgrQfV2yc9Gg75J+ke37PPxMg/pZb7M1CvUUJ4Ut8umJHy9uwZ2Hfk91LbJcHIXTWWUl2XLhqCGVNjd1rHVJPIYG2T3VbnKVanlbaX6eHpv8A7BI1x82Jv8qfxCk+uf8AF9L/AFxP4k1P1ciSNNXF2W8jiUlADLY6iOt381Hx5eAqBrj/ABfS/Z/bE/iTWzBqzgtfN+lA3a8Yj+tw5M9MxEZCVpTKhDK2F5BGfAjPvqNpdSJt8ju2tmUIERlwOSpJPHIcWQTn7BTHWk+YzMtNviyzCanOKS7JSBkAY2yfOmNjW6h6bBel+tiKtAQ8cBWFJzwqxsSN9+40U5Rwavwy6XtfTX152G8rV1/evYv52fia7uK4Rdf3rWL/ADGfia7uK9H2b9NDoc3HeddDNFFFXyiFFFFAFFFFAFItd/Mu+fUXfwmntItdfMy9/UnfwmoehlHzI5Z6L0Jc02+haQpCn1hST2jAp0vSlhdUxx2xjLKcJA27e0dtJ/RWM6edH/2FfAVY48eai6SpDs3pIboAaj9GB0ZHM57a8Vi5zjiamzK37nfYs19j9T7jgYHAjA7uunl4Uun4/VLT2eXrEX40x1/8z7j/ACo/Gml0/wCaWnfrEX41nhf9KH/J/ZAsyrgph5YlxH2k8R4XUjjQRnvTuPePfSCe2wNS2aTaVx0uvB8KUnJSvZJwQORO+9WRc2GlRCpscEEgjpUgjw51XNSm3Kn2d8SGEq9c4XHGHUhQBQrmR4gVowrW3pa6fR5MhlnYU4WUKdQGnFDrJBzwnuB//Kq7iQYD92igB2Nclutq5Zb4ghweKSOI+YFNbxJVF08+uC+XXlIDLDgVxErUeEHI2Jyaj3eOiJaoFkhEJU+4hlIHPo0HicV9gx5qqcP4X1fstfnUMZyhMed4GFpZYCcrfO6z4AdnmeWeXbVcvyoNqfgzLe4tUpuW2iQhtXGp5Kjjrn6W+2cc6dzzaVySidNb6qQPV3ZASkeJT2++lGq51t/QaYsSVEw5KYRwtOJ6o6QKJwDy2rLCvxxSTs9eHrxIZs1e7Jd01cC9G6BrhTwBbgUsniHMDZP2moGuRm76XGcf2tO+ce0mmWsJcWTpm4CNJYeKQnPROBRA4h3Ut1z/AIvpf62n8Sa3YRZwyt5v0oktlyt8O5Merz46HmweIBQ3B76LfBi26MmNCYQy0nfgR39/nUpXyle+oFojTYsdxE+b624pwrSvg4eFPYmuapSdO21lwMt5Urr+9axf5jPxNd3FcIuv71rF/mM/E13cV7Ts36aHQ5eO866GaKKKvlEKKKKAKKKKAKRa6+Zl7+pO/hNPaRa6+Zl7+pO/hNQ9DKPmRyDQ85Vs0PcJqEcamHFrSnvOBimNkj3yVaUXlV5fVJdQX0ReEFnh5hJHlS7Q7cV3Q1xROXwRipzpFY+SOHnSuHeb1b9OqZOU2sApYlrZIcW2TjCDnAOM4z5V5idJ1KlRQtfa38OB3mWjVU5i5ej6VMiqy2622cZzwnjTke41on/NLTv1iL8axqqzRbXpa9OwStLMlLR6HbgRhSd0+dZnkJ0hp5RxgSIp3860UlBRjsabb+wLW6xERxKdYjp3PWcQn4kVX9SGDOtEhm3tIelABxsx45WApJB3UBjs76byo9sju9NL4C6pRKemUVqOexKd8+VQZt+QyUtdLHhAkBCpO6z5NJ/qR5VUw6ltKUbu3zmCPLneuaUTckxkMx0OMyQlCgeqlYKuXI7GmDKUyNTSpCh1IcdLDZzjBWeJR+wJ386qj8VltL0izO3MJWhfTJfhZYUFA8RCVcPD28s0lsNy/SEtcGdIuT7TiUhpqJwoL/CnHXyc8gORq+sJtQk4vjud1e38cd4L9cr+xa5ARcGW3OkOGxFWHHCPFGx942qFbHU3O9Nz7oGonq/EmJBeGFjOxWvOxJGdhUeKqz2l1T0FMi1uqT1zNirUhXmrmM94Pup41dosthJlNMqZVt0rSw+z/uG6feBWiUdiHgi81rv9F/DII2tQBpacRjdKeX8wpTrn/FtMZz/1aeX8yanatjxI+lZjkJKQ24EY4FEoxxDcDlULXY4bvphPdMSNvNNThPNH/t+kkbarlzYxjphSkRArjUXFt8fGsY4W/DOT9lK40uTD1jEtzN3duLT7ajJQ4tKuiWnJ7Pk8uX/arFdm5iZEaZBbEjoStLkZSuHpEqxuCduIEZHhmkEeJKuurYtzTbxBYiIUhzicQXHVEEbhJONz21jh3DuXdK1nfTXdff0BDupH/ivYsnfjY295ru4rhF1P/mvYh/GwfvNd3Fek7N+mh0RzMd510M0UUVfKQUUUUAUUUUAUi118zL39Sd/Cae0k1ulS9H3pKE8SjBdwMZz1TUPQyj5kcl9HEVubpKXFfz0Tzq0Kx3EAVrhT2YNsuMEIuN5t0ZBj/wB0joknsRt1jz579lVy1PLZ0pGkhSlMxLsnp2wrAUhSRjP/ADtp/Dtk4C6WaM2XoDswuGS2+G+jBA4krHaOHG3aa83VppVJyk8m9NLW58TvMbXhwXX0fSlsMuNARv7pxWVILahkHO5I4e2ojSTefRq16rlT7LQKcc+Ns5/pU7RcoTIU+3qWh+LEfVHZdAwHG8bA9+3/ADelOlX1aZ1BL09NVwMSFdJFWeWTy9xA+6qqTipwjrCW0lxQI0nUMZ+U1JnLfiRJbKXAuEjLjxxhaVOc0gKHyU+fbUxnV+lLU0Ta4Tpc9rgaAUrzWo5NQ9UWVu3OuR3+paZbvSsyAM+pPnnn+A/DyqkT4Mi3PmPKbCVDdKgcpWO9J7RV+lh6GIgs3bhfX5vCHmpdZzr2kx2x6rD59Ek5K/5j2+VV1tZbUhaFFCkHKVA4KT314orpUqUKUdiCsjIvlk9IrzTQZvEcyABgPN/KI8RyqTL1BpGQr1hj12DL59PDbLSyfEA4V7652NzvvTC229LrXrs4qRBbVuR8p4/QQO059w51UngaEZbauuj1MWi2sTHbymFbkNICZk0OqeS30ZeZb3K1IGwOdsjng0x1gtMzWmnYCActOh1YHYArPwSamadhJtESTfbuEsOrbHC0OUZkckJ/i/7eNQdEMO3i9TdTzEFKXFFuMnuHLbwA295rmynFSlUj5YprrJ5fOgQ31dDXOdhNIDzpw4Q0y7wrCspAXjtSncHzpM0xEh+kC3sW2OuAgMrD3GkoTI2OOHv8/Cmd9ujeG5cVuakRCf7a2wlbSQrZQUkkKKdgcgcxzr1brY7c7xGvc+5RZPq7f7BuIgpSniHM5JO+eVaqcnSoePJWa9X7EbxVdf3rWPq4/aM/E13cVwa4KLvpasyUc0uM588k13kV6Hs36aHRHNx3nXQzRRRV8pBRRRQBRRRQBWiawmVDfjufIdbUhXkRg1vrBOBvQHzVpqEsTLxpOesMuyAWwrsS62rY+/GfdTzUdoi29ph+7PTJrimeiJjKQyFBCc9bfJOAd6YemPTz9tusfVdtHCkrSJBHJtY+Ss+Bxg+OK29I3rPTzL8J4R5rCwtIUM9E6B8kj6J39xrgY5ToVlO9oPXk/wDOR26U1UgpIV2O/wD6GYRHNuQiEhXA6WEEFtRVwjdRPSAqGCffTvUFla1LbgotOxJrJyw46nhIPdt2VV29P3STNZt06PBgsKy+tpg59YKB24z1cnG+wqw6RuDip0u0pcRIjREBQebSQhCyTlsZ5gZwPAGqWJjGL7+i/Es/T7GxECzahbWF6e1e0lqSMN8bwAQ8nsye/wAe3zqPeNLzbcz0UVg3a1ZKhEdUQ6x4tq5jy7e41a79YoF9ihua1hYGG3kHrI8j3eFVVEXVWlOpExdrakdVA+UgeXMe7IrGhWjJ7VJqLesXo+ae4lop71st761CDckx1jnHuCS2tJ7uLkfurX+g3k7uTLc0n6SpKSPuzV4XrOwTx0d+tbjLqdv2zAXj3/KrWLt6PmP2jcdpaueBFX/Xauh+KrrJ05fkn7jMq9ttkR1/o4LT96lp9htBQwk96lHcj3jNXaFY2LWlN71TKaW9HH7NAThmP3JQkcz/AM8ai/rq5JT6ppexOOJ7FFACfsG32moT9ndXIana4nrcdUf2FujdZavAJHZ5fbWirOrUyqeFcNZP8tPbmDa4uZr6f0TXSxbHGXlavadV/U/DzNXG4RlRbBJjW1rgWiKtMdCOeeE7Dx8e+l9rvK3BJt0W0mE/Gj9JGjLdThYOQAQk7HI5Gk+l46tQuKlXNpIlw5GHnkqy6pwHISk5whA5YHP41KkZSzl4YQtZa67+d+II8S5S5NrkItEi2q9bbShSX3ejXFASE4IPyhjJ8yam6GS0idJEZ0OQocRuMuR7LjgKlKPkOI+4Vq1PB0+/cXUeoAvtp45L6StDbfLdXCD3+6oep73Ft+nGLNaIwjOymuJ1tByWwewnmVK8eYwe2rGz31NQhFrb9ub9NNCNDf6PEK1J6UV3ThPq8YLfHgPkIB885x513oVSvRVpX9WrCFSW+GfMIcfB9geyn3fE1dq9JSgoQUUcjE1FOo7aIKKKK2FcKKKKAKKKKAKKKKAjzorE6I7FlNJdYdSULQoZCga4NqOw3P0cXv1+2cUi1PKwCdxj6Cu49xr6BqNPhx58R2LMZQ8w6nhW2sZBFa6tKNSLjJG6jWdJ5aHIwLXrOEiTEmyor6U8DvQK4VpB3KFDtHjTu0WuHZ4iYkBoIbTuTkErPeT31V9W+ji66blG7aSdfdYRuWmzl1od2PbT4c612L0gxnsMXxPqr4OC8EngJ8R7NeZx3Z+Ipx2abbhw+anXp1IzV4lwucxu32+TMdGUMNqWRxBPFgcgT2nlXP7My7LSVxvWg/wF5KmpRTIKc4yU5KFEEjbCTvVr1LFdvVlQuzPNPuNOofbAXlDnDvjP50rOqbilZbOl5abotISClvCT5q7vuqvg040nsK8nrna3pwM3mT7HJTOs65V89XWyl1SWpD7aUqcbBx1huArII2PZU5MawpfDYat3T4BCRwZqrOj9CSYMG5vttOeovOR3nv7pMtaiVKPlxYB/OktxXbV21+HFYgrejdZq5s/s+NSQCpJVvxqJO2+/hit6wveSvGTSfDS3z+iLnRW7gtSVG3W1x5r2TxIaCvEA4JHjgVVL28oXBNwhqkYmvpjvJLGVxiNijIOcE+yCPOoWkJdogsCZeLo4zcG3itTTiDx4xgDOOIgjBxnGab2yKdTpvMpovxY8iS27EdAwQtsY4wM75qFTjhpttZb3Z5589eOXAamy8xGYGljOkRWIE+OeNhxkcJK89X7e1O/OsWzS61ut3ODdZNvZnoQ8/GbG4UoAkBWdtz3bVomWaJDfTO1pflzuj3ajqHDxHwT2/ZS65awul9kfovSsV4FzqgtjLihy2xskePZWVOFaotmi73ebtl0V9SepP1deLVZYqIUFtLstGepxZSnPMu/SPbg9tOPRhoJ9x9GpdSpUp9Z6SNHczkH6ax8B2fBhoP0XMWtxFx1EESpwIUhn5SGjzyfpKz28q6aOYru4TCKhG17vic7EYq/hgA2wK9UUVdKAUUUUAUUUUAUUUUAUUUUAVis0UBg8qqmqdA2PUoLkhj1eXjaTHwlXvHJXvq2UVDSZlGTi7pnCJno11bp19b1gmCWyDnDK+jWf5kHY+6oSdcahtCuivdqzwnBLjZaJ9/I19BKrU+0271XW0LSRuFJzmqtbBUa3njctwxs15lc4U9rrTt0ZDV2tchSAcgKSlwJ8jkGsfrJopoNlNtUeiOUJTG5Hv3Viugap09ZEoU4mz24LPNQioyffiqqzZLSXEA2uERxf/HR+VUv/AJtGPhi2l1ZdjW2lewjuOu7I690rVi9YexgOSOBJ/rWGbtrTUQDNmtjkdrlllrhAH8ysfdXYLBYrPGSXI1qgMrIGVNxkJP2gVYMBJSEgAdwrfS7Nw8bO1+uf3K9TGOLskcasvofuE6QZWqLlw5+U2yeNavNZ5e6up2DT9r0/H9XtUNthGN1gZUvzPM00rNX4wUdClUrTqeZhWaKKyNQUUUUAUUUUAUUUUB//2Q==" alt="">
									</div>
									<div class="text-center">
										<p class="tx-16 fw-bolder"> </p>
										<p class="tx-12 text-muted"> </p>
									</div>
								</div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="" class="text-body ms-0"> 
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="edit"></i>
                      <span>Edit Profile</span>
                    </a>
                  </li>
                  
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>