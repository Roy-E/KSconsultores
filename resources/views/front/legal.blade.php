@extends('front.layout.base')

@section('meta_page')
<title>KS Consultores | Conocimientos jurídicos</title>
<meta content="Resolvemos conflictos ante dependencias como: SAT, IMSS, Paraestatales o Secretaría de Finanzas. " name="description"/>

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="KS Consultores">
<meta itemprop="description" content="Resolvemos conflictos ante dependencias como: SAT, IMSS, Paraestatales o Secretaría de Finanzas.">
<meta itemprop="image" content="{{ asset('front/img/banner-legal.jpg') }}">

<!-- Open Graph data -->
<meta property="og:title" content="KS Consultores | Cumplimiento contable oportuno" /> 
<meta property="og:image" content="{{ asset('front/img/banner-legal.jpg') }}" />
<meta property="og:type" content="article" /> 
<meta property="og:url" content="{{ Request::url() }}" />
<meta property="og:description" content="Resolvemos conflictos ante dependencias como: SAT, IMSS, Paraestatales o Secretaría de Finanzas." />
@stop

@section('body_class')
    class="legal"
@stop

@section('view')

<section class="banner-intro img-cover flex align-middle align-center" style="background-image: url('{{ asset('front/img/banner-legal.jpg') }}')">
	<div class="banner-intro-info">
		<h1 class="banner-intro-title">Conocimientos jurídicos</h1>
		<h2 class="banner-intro-subtitle">para la resolución de conflictos</h2>
	</div>

	<div class="banner-intro-down">
		<a class="btn-custom" href="#intro">Ver Más</a>
		<a class="icon-down" href="#intro"><i class="icon-arrow-next"></i></a>
	</div>
</section>

<section class="about" id="intro">
	<div class="row">
		<div class="columns small-12">
			<p class="title-section">NUESTROS SERVICIOS</p>

			<p class="title-big">Legal</p>

			<div class="slogan-section row align-middle text-center">
				<div class="small-2 medium-1"> 
					<span>“</span>
				</div>
				<div class="small-8 medium-10"> 
					<p>Por medio de nuestras alianzas, podemos ofrecer un área de asesoría legal en donde profesionistas altamente capacitados brindan asesoría oportuna sobre temas fiscales y administrativos ante diferentes dependencias.</p>
				</div>
				<div class="small-2 medium-1"> 
					<span>”</span>
				</div>
			</div>

			<div class="cta-section">
				<a class="btn-border" href="#contacto">Solicitar información</a>
			</div>
		</div>
	</div>
</section>

<section class="banner-inter img-cover" style="background-image: url('{{ asset('front/img/banner-legal-1.jpg') }}')">
	<div class="row">
		<div class="columns small-12 flex align-middle">
			
			<div class="banner-inter-info">
				<div class="banner-inter-logo">
					<picture>
	                    <source media="min-width: 320px" srcset="{{asset('front/img/logo-section.png')}}, {{asset('front/img/logo-section@2x.png')}} 2x"><img src="{{asset('front/img/logo-section.png')}}" srcset="{{asset('front/img/logo-section@2x.png')}} 2x" alt="Ks consultores banner">
	                </picture>
				</div>
				<p class="banner-inter-title">Asesoría legal en donde profesionales altamente capacitados brindan asesoría oportuna.</p>
			</div>
		</div>
	</div>
</section>

<section class="advantages">
	<div class="row">
		<div class="columns small-12">
			<p class="title-section">VENTAJAS</p>

			<p class="title-medium">¿Por qué asesorarte legalmente<br /> con KS Consultores?</p>
		</div>
	</div>
	<div class="row reason-list align-center">
		<div class="columns small-12 medium-6 large-4">
			<div class="reason-item text-center">
				<div class="reason-image">
					<picture>
                        <source media="min-width: 320px" srcset="{{asset('front/img/ventaja-legal-1.png')}}, {{asset('front/img/ventaja-legal-1@2x.png')}} 2x"><img src="{{asset('front/img/ventaja-legal-1.png')}}" srcset="{{asset('front/img/ventaja-legal-1@2x.png')}} 2x" alt="reason-1">
                    </picture>
				</div>
				<div class="reason-slogan">
					<p>Resolución de<br /> conflictos</p>
				</div>
				<p class="reason-description">Resolvemos conflictos ante dependencias como: SAT, IMSS, Paraestatales o Secretaría de Finanzas.</p>
			</div>
		</div>
		<div class="columns small-12 medium-6 large-4 with-line">
			<div class="line-left"></div>
			<div class="reason-item text-center">
				<div class="reason-image">
					<picture>
                        <source media="min-width: 320px" srcset="{{asset('front/img/ventaja-legal-2.png')}}, {{asset('front/img/ventaja-legal-2@2x.png')}} 2x"><img src="{{asset('front/img/ventaja-legal-2.png')}}" srcset="{{asset('front/img/ventaja-legal-2@2x.png')}} 2x" alt="reason-2">
                    </picture>
				</div>
				<div class="reason-slogan">
					<p>Conocimiento<br /> Jurídico</p>
				</div>
				<p class="reason-description">Tenemos como aliados a profesionales con experiencia en implementación de recursos legales eficaces.</p>
			</div>
			<div class="line-right"></div>
		</div>
		<div class="columns small-12 medium-6 large-4">
			<div class="reason-item text-center">
				<div class="reason-image">
					<picture>
                        <source media="min-width: 320px" srcset="{{asset('front/img/ventaja-legal-3.png')}}, {{asset('front/img/ventaja-legal-3@2x.png')}} 2x"><img src="{{asset('front/img/ventaja-legal-3.png')}}" srcset="{{asset('front/img/ventaja-legal-3@2x.png')}} 2x" alt="reason-3">
                    </picture></div>
				<div class="reason-slogan">
					<p>Alianzas<br /> estratégicas</p>
				</div>
				<p class="reason-description">Creamos alianzas para brindar asesoría especializada en temas jurídicos, fiscales y administrativos.</p>
			</div>
		</div>
	</div>
</section>

<section class="banner-inter img-cover" style="background-image: url('{{ asset('front/img/banner-legal-2.jpg') }}')">
	<div class="row">
		<div class="columns small-12">
			
			<div class="countable-services-info">
				
				<p class="countable-services-title">Conoce nuestros <br />servicios legales:</p>

				<ul class="countable-services-list">
					<li><i class="icon-check"></i> Derecho Administrativo </li>
					<li><i class="icon-check"></i> Comercio Exterior y Aduanas</li>
					<li><i class="icon-check"></i> Derecho Corporativo</li>
					<li><i class="icon-check"></i> Derecho Mercantil</li>
					<li><i class="icon-check"></i> Derecho Fiscal</li>
					<li><i class="icon-check"></i> Derecho Migratorio</li>
					<li><i class="icon-check"></i> Derecho de Propiedad Intelectual</li>
					<li><i class="icon-check"></i> Derecho Civil</li>
					<li><i class="icon-check"></i> Derecho Constitucional</li>
					<li><i class="icon-check"></i> Derecho Societario</li>
				</ul>

			</div>

		</div>
	</div>
</section>

<section class="contact" id="contacto">
	<div class="row">
		<div class="columns small-12">
			<p class="title-big">¿Necesitas asesoría legal?</p>
			<div class="slogan-section row align-middle text-center">
				<div class="small-2 medium-1"> 
					<span>“</span>
				</div>
				<div class="small-8 medium-10"> 
					<p>Si necesitas asesoría legal, llámanos al (33) 3641 0345<br /> o llena el siguiente formulario:</p>
				</div>
				<div class="small-2 medium-1"> 
					<span>”</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row contact-section">
		<div class="columns small-12 large-7">
			<form name="contact-form" id="contact-form" action="{{route('sendContact')}}" method="POST">
				<input type="hidden" name="team" id="team" value="4" />
				<input type="hidden" name="type" id="type" value="Legal" />
	            <div class="contact-form">
	             	<div class="row">
		                <div class="small-12">
		                	<span class="label-input">*Nombre</span>
		                  	<div class="input-custom">
		                   		<input name="name" type="text" id="name" maxlength="100">
		                  	</div>
		                </div>
	              	</div>
	              	<div class="row">
		                <div class="small-12">
		                	<span class="label-input">*E-mail</span>
			                <div class="input-custom">
			                    <input name="email" type="text" id="email">
			                </div>
		                </div>
	              	</div>
	              	<div class="row">
		                <div class="small-12">
		               		<span class="label-input">Teléfono</span>
		                  	<div class="input-custom">
		                    	<input name="phone" type="text" id="phone" maxlength="25">
		                  	</div>
		                </div>
	              	</div>
	              	<div class="row">
		                <div class="small-12">
		                	<span class="label-input">*Mensaje</span>
		                  	<div class="input-custom">
		                    	<textarea name="comments" id="comments" maxlength="255"></textarea>
		                 	</div>
		                </div>
	              	</div>

	              	<div class="block-button">
		                <input type="button" value="Solicitar información" class="btn-border">
		            </div>

	              	<div class="retro"></div>

	             	<div class="loading">
				    	<div class="spinner">
				    		<div class="dot1"></div>
				    		<div class="dot2"></div>
				    	</div>
				    </div>
	            </div>
	        </form>
		</div>
		<div class="columns small-12 large-5 flex align-right">
			<div class="contact-info">
				<p class="contact-name">KS Consultores</p>
				<p class="contact-address">Calle Ricardo Palma 2955<br />C.P. 44670<br />Guadalajara, Jal.</p>
				<p class="contact-phones">Teléfonos: <a href="tel: +52 33 3641 0345">01 33 3641 0345</a><span>/</span><a href="tel: +52 33 3641 8038">3641-8038</a></p>

				<a class="contact-map" href="https://goo.gl/maps/rrU1eCHtu7G2" target="_blank">
					<img src="{{ asset('front/img/map.png') }}" />
				</a>

			</div>
		</div>
	</div>
</section>


@stop
