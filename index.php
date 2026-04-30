<?php
// 1. Configuramos las variables para esta página específica
$pageTitle = 'Fotopic';
$pageCss = 'index.css';

// 2. Incluimos el Header
require_once 'includes/header.php';
?>

    <section class="hero">
        <div class="hero-content">
            <h1>Inmortalizando tu visión</h1>
            <p>Soluciones fotográficas integrales: desde retrato personal, familiar y de mascotas, hasta fotografía comercial, editorial e impresión de alta calidad.</p>
            <a href="#contacto" class="btn btn-primary">Agendar Sesión</a>
        </div>
    </section>

    <section id="servicios" class="section">
        <div class="container">
            <h2>Nuestra Especialidad</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Fotografía Individual</h3>
                    <p>Capturamos tu esencia con sesiones personalizadas, ideales para potenciar tu marca personal o renovar tu imagen en redes sociales.</p>
                </div>
                <div class="service-card">
                    <h3>Retrato Corporativo</h3>
                    <p>Proyecta la mejor imagen de tu equipo y directivos con iluminación de alta gama.</p>
                </div>
                <div class="service-card">
                    <h3>Fotografía de Producto</h3>
                    <p>Destaca texturas y detalles para e-commerce o campañas publicitarias.</p>
                </div>
                <div class="service-card">
                    <h3>Editorial & Moda</h3>
                    <p>Dirección de arte, styling y ejecución impecable para revistas y marcas de ropa.</p>
                </div>
                <div class="service-card">
                    <h3>Fotografía de Mascota</h3>
                    <p>Inmortalizamos la personalidad única de tu mejor amigo de cuatro patas con sesiones dinámicas, creativas y llenas de paciencia.</p>
                </div>
                <div class="service-card">
                    <h3>Fotografía Grupal</h3>
                    <p>Congelamos momentos inolvidables junto a tu familia o amigos, resaltando la conexión, la naturalidad y el vínculo del grupo.</p>
                </div>
                <div class="service-card">
                    <h3>Documento de Identificación</h3>
                    <p>Fotografías que cumplen con todos los estándares oficiales para pasaportes, visas y credenciales, garantizando encuadres perfectos.</p>
                </div>
                <div class="service-card">
                    <h3>Impresión de Fotos</h3>
                    <p>Transformamos tus archivos digitales en obras tangibles con revelado e impresión de alta resolución en papeles fotográficos premium.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portafolio" class="section portfolio">
        <div class="container">
            <h2>Trabajos Destacados</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80" alt="Retrato 1"></div>
                <div class="portfolio-item"><img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=800&q=80" alt="Producto 1"></div>
                <div class="portfolio-item"><img src="https://images.unsplash.com/photo-1512413914583-09415494d135?auto=format&fit=crop&w=800&q=80" alt="Editorial 1"></div>
                <div class="portfolio-item"><img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?auto=format&fit=crop&w=800&q=80" alt="Moda 1"></div>
                <div class="portfolio-item"><img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=800&q=80" alt="Producto 2"></div>
                <div class="portfolio-item"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80" alt="Retrato 2"></div>
            </div>
        </div>
    </section>

    <section id="contacto" class="cta-section">
        <div class="container">
            <h2>¿Listo para crear algo increíble?</h2>
            <p>Déjanos tus datos y nos pondremos en contacto contigo para cotizar tu proyecto.</p>
            <a href="mailto:hola@estudio.com" class="btn btn-outline">Solicitar Cotización</a>
        </div>
    </section>

<?php
// 3. Incluimos el Footer
require_once 'includes/footer.php';
?>