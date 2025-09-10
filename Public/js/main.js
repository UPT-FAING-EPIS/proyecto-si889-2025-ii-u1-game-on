/**
 * GameOn Network - Main JavaScript File
 */

document.addEventListener('DOMContentLoaded', function() {
    // Suaviza el desplazamiento al hacer clic en enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            if (!targetId) return;
            
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Animación para las tarjetas de beneficios
    const benefitCards = document.querySelectorAll('.benefit-card');
    
    if (benefitCards.length > 0) {
        // Función para verificar si un elemento está en el viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Función para animar elementos cuando aparecen en el viewport
        function animateOnScroll() {
            benefitCards.forEach(card => {
                if (isInViewport(card)) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        }

        // Establecer estilos iniciales para la animación
        benefitCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });

        // Ejecutar la animación al cargar la página
        animateOnScroll();

        // Ejecutar la animación al hacer scroll
        window.addEventListener('scroll', animateOnScroll);
    }

    // Validación de formularios
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            let hasErrors = false;
            
            // Validar campos requeridos
            const requiredFields = form.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                const errorMessageEl = field.nextElementSibling;
                
                if (!field.value.trim()) {
                    e.preventDefault();
                    hasErrors = true;
                    
                    field.classList.add('invalid');
                    if (errorMessageEl && errorMessageEl.classList.contains('error-message')) {
                        errorMessageEl.textContent = 'Este campo es obligatorio';
                    } else {
                        const errorMsg = document.createElement('div');
                        errorMsg.className = 'error-message';
                        errorMsg.textContent = 'Este campo es obligatorio';
                        field.parentNode.insertBefore(errorMsg, field.nextSibling);
                    }
                } else {
                    field.classList.remove('invalid');
                    if (errorMessageEl && errorMessageEl.classList.contains('error-message')) {
                        errorMessageEl.textContent = '';
                    }
                }
            });
            
            // Validar email si existe
            const emailFields = form.querySelectorAll('input[type="email"]');
            emailFields.forEach(field => {
                if (field.value.trim()) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    const errorMessageEl = field.nextElementSibling;
                    
                    if (!emailRegex.test(field.value)) {
                        e.preventDefault();
                        hasErrors = true;
                        
                        field.classList.add('invalid');
                        if (errorMessageEl && errorMessageEl.classList.contains('error-message')) {
                            errorMessageEl.textContent = 'Por favor, introduce un email válido';
                        } else {
                            const errorMsg = document.createElement('div');
                            errorMsg.className = 'error-message';
                            errorMsg.textContent = 'Por favor, introduce un email válido';
                            field.parentNode.insertBefore(errorMsg, field.nextSibling);
                        }
                    }
                }
            });
            
            // Validar contraseñas si existen
            const passwordField = form.querySelector('input[type="password"][name="password"]');
            const confirmPasswordField = form.querySelector('input[type="password"][name="confirm_password"]');
            
            if (passwordField && confirmPasswordField) {
                const errorMessageEl = confirmPasswordField.nextElementSibling;
                
                if (passwordField.value !== confirmPasswordField.value) {
                    e.preventDefault();
                    hasErrors = true;
                    
                    confirmPasswordField.classList.add('invalid');
                    if (errorMessageEl && errorMessageEl.classList.contains('error-message')) {
                        errorMessageEl.textContent = 'Las contraseñas no coinciden';
                    } else {
                        const errorMsg = document.createElement('div');
                        errorMsg.className = 'error-message';
                        errorMsg.textContent = 'Las contraseñas no coinciden';
                        confirmPasswordField.parentNode.insertBefore(errorMsg, confirmPasswordField.nextSibling);
                    }
                }
            }
            
            return !hasErrors;
        });
    });
});

// ✅ FUNCIÓN NUEVA: Manejo mejorado de errores de Google Maps
window.gm_authFailure = function() {
    console.error('❌ Google Maps: Error de autenticación de API');
    const mapElements = document.querySelectorAll('#map');
    mapElements.forEach(map => {
        map.innerHTML = `
            <div class="loading" style="background: linear-gradient(135deg, rgba(220, 53, 69, 0.1), rgba(231, 76, 60, 0.1)); border-color: rgba(220, 53, 69, 0.3);">
                <i class="fas fa-key" style="font-size: 3rem; color: #dc3545; margin-bottom: 15px;"></i>
                <p style="color: #dc3545;">Error de autenticación de Google Maps</p>
                <small style="color: #dc3545;">La API key necesita configuración de billing</small>
            </div>
        `;
    });
};

// ✅ FUNCIÓN NUEVA: Manejo de errores de red
window.addEventListener('online', function() {
    console.log('🌐 Conexión restaurada, reintentando cargar mapa...');
    if (typeof loadGoogleMaps === 'function') {
        setTimeout(loadGoogleMaps, 1000);
    }
});

window.addEventListener('offline', function() {
    console.log('📡 Sin conexión a internet');
    const mapElements = document.querySelectorAll('#map');
    mapElements.forEach(map => {
        if (map.innerHTML.includes('Cargando')) {
            map.innerHTML = `
                <div class="loading" style="background: linear-gradient(135deg, rgba(255, 193, 7, 0.1), rgba(255, 193, 7, 0.1)); border-color: rgba(255, 193, 7, 0.3);">
                    <i class="fas fa-wifi" style="font-size: 3rem; color: #ffc107; margin-bottom: 15px;"></i>
                    <p style="color: #ffc107;">Sin conexión a internet</p>
                    <small style="color: #ffc107;">Verifica tu conexión e intenta de nuevo</small>
                </div>
            `;
        }
    });
});

console.log('✅ Main.js: Manejo de errores de Google Maps configurado');