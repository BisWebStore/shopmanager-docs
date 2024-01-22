<?php $this->assign('title', '&Uuml;bersicht') ?>
<?php $this->assign('meta_canonical', 'https://docs.bisweb.de') ?>

<div class="grid grid-cols-2 gap-3 md:grid-cols-3 md:gap-4">
    <div class="col-span-2 md:col-span-1">
        <h1 class="font-heading font-bold mb-3">How-To-Artikel Shopmanager Plugin</h1>

        <ol class="list-decimal list-inside mb-3">
            <li><a href="#cakephp">CakePHP installieren und einrichten</a></li>
            <li><a href="#deployer">Deployment konfigurieren</a></li>
            <li><a href="#shopmanager">Shopmanager Plugin installieren und einrichten</a></li>
            <li><a href="#theme">Eigenes Custom Theme Plugin anlegen</a></li>
            <li><a href="#checkout">Checkout individualisieren</a></li>
            <li>...</li>
        </ol>
    </div>
    <div class="col-span-2 md:col-span-2">
        <section id="cakephp">
            <h2 class="font-heading font-bold mb-3">
                1. CakePHP installieren und einrichten
            </h2>

            <p class="mb-3">
                Die CakePHP Framework App Vorlage nutzen und mit Hilfe von Composer installieren.
            </p>

            <code class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                <span class="flex gap-4">
                    <span class="shrink-0 text-gray-500">$</span>

                    <span class="flex-1">
                        <span>composer create-project --prefer-dist</span>
                        <span class="text-yellow-500">cakephp/app:~4.0 my_app_name</span>
                    </span>
                </span>

                <svg class="shrink-0 h-5 w-5 transition text-gray-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z"></path>
                    <path
                        d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z">
                    </path>
                </svg>
            </code>

            <p class="my-3">
                Nach der Installation sind erste Einrichtungsschritte:
            </p>

            <ul class="list-disc list-inside mb-3">
                <li>Datenbank Zugangsdaten in Konfiguration eintragen</li>
                <li>Sprache und Zeitzone in Konfiguration anpassen</li>
                <li>DebugKit f&uuml;r eigene Testumgebung URL freigeben</li>
            </ul>
        </section>

        <section id="deployer">
            <h2 class="font-heading font-bold my-3">
                2. Deployment konfigurieren
            </h2>

            <p class="mb-3">
                F&uuml;r die technische Auslieferung von Anpassungen empfehle ich Deployer -<br>
                eine Vorlage f&uuml;r das CakePHP Framework ist bereits enthalten.
            </p>

            <p class="mb-3">
                <a href="https://deployer.org/" class="hover:underline text-blue-400 underline-offset-4 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                    <span class="ml-1">deployer.org</span>
                </a>
            </p>

            <p class="mb-3 italic">
                Hinweis: Deployer muss vorab installiert werden, bevor der Befehl ausgef&uuml;hrt werden kann.
            </p>

            <code class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                <span class="flex gap-4">
                    <span class="shrink-0 text-gray-500">$</span>

                    <span class="flex-1">
                        <span>dep init</span>
                    </span>
                </span>

                <svg class="shrink-0 h-5 w-5 transition text-gray-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z"></path>
                    <path
                        d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z">
                    </path>
                </svg>
            </code>

            <p class="my-3">
                In der CLI-Eingabemaske PHP ausw&auml;hlen und CakePHP, in der Regel kann die Vorauswahl best&auml;tigt werden.
            </p>
        </section>

        <section id="shopmanager">
            <h2 class="font-heading font-bold my-3">
                3. Shopmanager Plugin installieren und einrichten
            </h2>

            <p class="mb-3">
                F&uuml;r die Installation des Shopmanager Plugins ist ein gebuchtes Paket erforderlich.
            </p>

            <p class="mb-3">
                Eine &Uuml;bersicht der verf&uuml;gbaren Pakete findet man in meinem
                <a href="https://bisweb.de/shop/p/shopmanager-plugin-pakete/" class="hover:underline text-blue-400 underline-offset-4" title="Shopmanager Plugin Pakete">Shop</a>.
            </p>

            <p class="mb-3">
                Zum Einstieg empfiehlt sich das H&auml;ndler-Paket, da dieses eine Datenmigration<br>
                und die Umsetzung eines individuellen Themes beinhaltet.
            </p>

            <p class="mb-3">
                Eine ausf&uuml;hrliche, technische Anleitung + Token für das hinzuf&uuml;gen des privaten Repos
                erh&auml;lt man mit der Buchung.
            </p>

            <code class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                <span class="flex gap-4">
                    <span class="shrink-0 text-gray-500">$</span>

                    <span class="flex-1">
                        <span>composer require</span>
                        <span class="text-yellow-500">bisweb/shopmanager-cakephp</span>
                    </span>
                </span>

                <svg class="shrink-0 h-5 w-5 transition text-gray-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z"></path>
                    <path
                        d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z">
                    </path>
                </svg>
            </code>
        </section>

        <section id="theme">
            <h2 class="font-heading font-bold my-3">
                4. Eigenes Custom Theme Plugin anlegen
            </h2>

            <p class="mb-3">
                Das Standard Frontend des Shopmanager Plugins kann mit Hilfe von einem Custom Theme Plugin &uuml;berladen werden.
            </p>

            <p class="mb-3">
                CakePHP stellt mit seinen B&auml;ckerei Konsolenbefehlen in der Entwicklungsumgebung eine starkes Werkzeug bereit,
                um sich eine Plugin Vorlage generieren zu lassen.
            </p>

            <code class="text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6">
                <span class="flex gap-4">
                    <span class="shrink-0 text-gray-500">$</span>

                    <span class="flex-1">
                        <span>bin/cake bake plugin</span>
                        <span class="text-yellow-500">CustomTheme</span>
                    </span>
                </span>

                <svg class="shrink-0 h-5 w-5 transition text-gray-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z"></path>
                    <path
                        d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z">
                    </path>
                </svg>
            </code>
        </section>

        <section id="checkout">
            <h2 class="font-heading font-bold my-3">
                5. Checkout individualisieren
            </h2>

            <p>Die Checkout-Prozess-Schritte und Logik lassen sich individualisieren.</p>

            <h3 class="font-heading font-bold my-3">
                Standard Checkout
            </h3>

            <ol class="list-decimal list-inside mb-3">
                <li>Warenkorb</li>
                <li>Kasse</li>
                <li>Bestell&uuml;bersicht</li>
                <li>Dankeseite</li>
            </ol>

            <h3 class="font-heading font-bold my-3">
                Individualisierter Checkout
            </h3>

            <ol class="list-decimal list-inside mb-3">
                <li>Warenkorb & Kasse</li>
                <li>Bestell&uuml;bersicht</li>
                <li>Dankeseite</li>
            </ol>

            <p>
                Gerne stehe ich unterst&uuml;tzend zur Verf&uuml;gung.
            </p>
        </section>
    </div>
</div>
