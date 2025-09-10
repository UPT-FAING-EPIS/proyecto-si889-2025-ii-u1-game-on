<?php
// footer.php - Pie de página reutilizable para todas las páginas del dashboard
?>
    </main>
    <footer class="main-footer">
        <div class="footer-content">
            <div class="footer-info">
                <h3>Acerca de GameOn Network</h3>
                <p>GameOn Network conecta a los amantes de los deportes con instalaciones y eventos en tu zona, ofreciéndote una experiencia única.</p>
            </div>
            <div class="social-links">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
    <!-- Incluir Font Awesome para los iconos sociales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="/Public/js/horarios_modal.js" defer></script>

    <?php
    $current_page = basename($_SERVER['PHP_SELF'], '.php');
    if ($current_page === 'misequipos'): 
    ?>
        <script src="/Public/js/chat.js" defer></script>
        <script src="/Public/js/chatmongo.js" defer></script>
        
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                console.log('✅ DOM listo. Los scripts de chat deberían estar cargados.');
                setTimeout(() => {
                    console.log('🔍 Verificación final de objetos de chat:');
                    if (window.chatManager) {
                        console.log('✅ ChatManager (MySQL) está disponible.');
                    } else {
                        console.error('❌ ChatManager (MySQL) NO está disponible. Revisa la carga de chat.js');
                    }
                    
                    if (window.gameOnChatMongo) {
                        console.log('✅ GameOnChatMongo está disponible.');
                    } else {
                        console.error('❌ GameOnChatMongo NO está disponible. Revisa la carga de chatmongo.js');
                    }
                }, 500);
            });
        </script>
    <?php endif; ?>

</body>
</html>