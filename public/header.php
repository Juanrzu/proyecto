<!-- Menú Lateral Derecho Fijo -->
<aside class="fixed left-0 top-0 h-screen w-64 bg-gray-200 shadow-lg z-40 border-l border-gray-200">
        <!-- Encabezado del menú -->
        <div class="p-4 border-b border-gray-200 flex items-center justify-between">
            <h5 class="text-lg font-semibold text-gray-800 uppercase">Menú</h5>
            <div class="bg-gray-100 p-1 rounded-full">
                <img class="w-8 h-8 object-contain" src="../src/escudo.png" alt="Escudo institucional">
            </div>
        </div>

        <!-- Contenido del menú -->
        <div class="flex flex-col h-[calc(100vh-120px)] justify-between p-4 overflow-y-auto">
            <ul class="space-y-2">
              <!-- Inicio -->
              <li>
                <a href="display.php" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-blue-50 group transition-colors">
                  <svg class="w-5 h-5 text-gray-500 group-hover:text-blue-600 transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 12l9-9 9 9M4 10v10a1 1 0 0 0 1 1h4m10-11v10a1 1 0 0 1-1 1h-4" />
                  </svg>
                  <span class="ml-3">Inicio</span>
                </a>
              </li>

              <!-- Crear Constancia -->
              <li>
                <a href="constancias.php" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-purple-50 group transition-colors">
                  <svg class="w-5 h-5 text-gray-500 group-hover:text-purple-600 transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="3" y="4" width="18" height="16" rx="2"/>
                    <path d="M16 2v4"/>
                    <path d="M8 2v4"/>
                    <path d="M3 10h18"/>
                  </svg>
                  <span class="ml-3">Crear Constancia</span>
                </a>
              </li>


              <!-- Trabajadores -->
              <li>
                <a href="trabajadores/trabajadores.php" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-red-50 group transition-colors">
                  <svg class="w-5 h-5 text-gray-500 group-hover:text-red-600 transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="7" r="4"/>
                    <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/>
                  </svg>
                  <span class="ml-3">Trabajadores</span>
                </a>
              </li>

              <!-- Estudiantes Retirados -->
              <li>
                <a href="estudiantes_retirados.php" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-indigo-50 group transition-colors">
                  <svg class="w-5 h-5 text-gray-500 group-hover:text-indigo-600 transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="7" r="4"/>
                    <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/>
                    <line x1="4" y1="4" x2="20" y2="20"/>
                  </svg>
                  <span class="ml-3">Estudiantes Retirados</span>
                </a>
              </li>
            </ul>

            <!-- Cerrar Sesión -->
            <div class="mt-auto">
              <a href="login/acciones/salir.php" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-red-50 group transition-colors">
                <svg class="w-5 h-5 text-gray-500 group-hover:text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                </svg>
                <span class="ml-3">Cerrar Sesión</span>
              </a>
            </div>
        </div>
    </aside>