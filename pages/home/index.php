<?php FrontController::show("layouts/header") ?>

<section>
    <h4>HOME Page_ERASMUS_WebProgramming_1</h4>
    <article>
	<p style="text-align:justify">
        Hi, I'm Schiller Viktor from Hungary. I learn in a Janos Neumann University. 
		Since 2016, I designed more than 5 LEGO
		models for my children, spacing from simple brick models, to motorized Technic 
		contraptions for various skill levels, and advanced Lego-BOOST and Mindstorms 
		robotic creations. If you have any questions or need further information about 
		web-design solutions or LEGO-Robot creations, please feel free to contact me on 
		the "Contact" page.
	</p>
    </article>
    <article class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image members waves-effect waves-block waves-light">
                    <div class="activator"></div>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        Members
                    </span>
                    <p><a href=/?page=members>Click</a></p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image map waves-effect waves-block waves-light">
                    <div class="activator"></div>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        Map
                    </span>
                    <p><a href=/?page=map>Click</a></p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image contact waves-effect waves-block waves-light">
                    <div class="activator"></div>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        Contact
                    </span>
                    <p><a href=/?page=contact>Click</a></p>
                </div>
            </div>
        </div>
    </article>
</section>

<?php FrontController::show("layouts/footer") ?>
