# Towards a scalable SaaS platform **[1/2]**

    As you probably already know, one of the possible bottlenecks in building a massively scalable, resilient, structurally sound on-demand SaaS platform is the monolithic design of Deliberry core backend, where application, model, infrastrcture and view layers are tightly coupled.

    The Core of the architecture, albeit being stable enough to sustain load from existing customers, is slowly degrading in terms of application frameworks, package dependencies and tools that are being deprecated, slowly affecting stability, security and performance.

    What is your vision in the mid and long term to address those limitations? Think about incremental design, efficient architectural and engineering patterns that you would use and how you would drive and inspire the team to follow your ideas and make them contribute.

1. Primeramente hay que estudiar y comprender toda la casuísitca que está afectado a la estabilidad de la plataforma. Que está ocasionando el bloqueo para actualizar versiones y donde están los cuellos de botella mas grandes.
2. Una vez identificados los problemas en orden de prioridad hay que ir solventando cada uno de ellos, en algunos casos se pueden eliminar packages, funcionalidades y rehacerlas desde fuera con otra estructura aplicando microservicios que dependan en lo más mínimo del monolito principal de la aplicación.
3. No hay que solucionar todo de golpe ni rehacer toda la aplicación sino solo los casos de uso que puedan suponer un problema o requieran cambios y actualizaciones constantes.
4. La forma en la que el equipo encuentra y se le propociona inspiración es en el momento en el que la responsabilidad de saber qué, cómo y cúando depende de cada del equipo al completo puesto que somos los responsables de vender los cambios a la dirección, priorizando los mismos y ejecuntandolos posteriormente.
5. Para ello es muy importante medir todo, es decir, medir los problemas que ocasiona en la actualidad en p.ej. carritos perdidos u horas gastadas en un release que no debería ocasionar tanto tiempo perdido. Si todo esto somos capaces de medirlo y luego mostar el resultado una vez arreglado/regenerado podremos seguir mejorando y evitando las limitaciones de la plataforma porque todo el mundo gana y la empresa por encima de todo.  

# Towards a scalable SaaS platform **[2/2]**

    As a concrete example for the strategic exercise in point (1), think about how you would solve this real problem:

    We want to use our Marketplace platform, where different retailers have separate shops in Deliberry web site, such as https://deliberry.com/acme-retailer as a starting point for testing a single tenant shop, with its own domain name, such as https://acme-retailer.com. We succesfully run the test with small cosmetic changes and a few adaptations in the monolith code-base.

    2a. What kind of timeline do you envision to reach a working, basic MVP with a Deliberry CTO Case Towards a scalable SaaS platform scalable, free from the monolith limitations SaaS with a working e-commerce frontend and backend for simple retailers so that it can be operative for Q2 2021? 
    
    2b. What timeline, challenges, team effort do you envision in order to reach Q3 2021 with a working SaaS solution, based on what you designed in point (2a), that can serve small sized supermarket chains, integrating logistics and more advanced features migrated from the monolith?

### _2a._
- Es posible realizar un MVP en un tiempo apróximado de 2-4 meses estado en producción en el Q2, totalmente funcional y que siva como base obteniendo todos los inputs necesarios y fortalecer el MVP superando las siguientes fases en Q3
- El timeline apróximado teniendo en cuenta un equipo de desarrollo de entre 4-5 devs sería (Es prioritaria la contratación de un Frontend lo antes posible para acelerar el desarrollo de los componentes y la arquitectura inicial):
  1. 2 semanas para entender y organizar el diseño del nuevo MVP.
  2. 2 semanas para tener las primeras vistas de 2 tiendas de prueba siguiendo las specs antes comentadas. Sin todavía ninguna funcionalidad solo, las marcas blancas y los dominios redireccionados.
  3. 2 semanas para empezar a desarrollar y testear el diseño de los productos y diferentes tiendas de prueba, añadiendo simples funcionalidades como listado de productos, detalle de productos e inicio del carrito de compra.
  4. 1 semana para la ejecución básica de test unitarios para lo desarrollado en el punto anterior.
  5. 2 semanas para terminar las vistas publicas de las tiendas y empezar las funcionalidades de registro de usuarios y comportamiento de los usuarios y sesiones entre tiendas.
  4. 1 semana para la ejecución básica de test unitarios para lo desarrollado en el punto anterior.
  6. 2-3 semanas de trabajo conjunto con producto para probar cada funcionalidad y verificar todas las necesidades y solucionar últimos bugs y añadir funcionalidades finales necesarias para el lanzamiento del MVP.
   
### _2b._
- El desarrollo clave en esta segunda fase es desacoplar el proceso de mama shopers del monólito y empezar un nuevo desarrollo mejor orientado como microservicio con funcionamiento independiente de todo. Esto hará posible poder testear, realizar A/B testing y mejorar el funcionamiento de una parte clave del core de Deliberry.
- El timeline apróximado teniendo en cuenta un equipo de desarrollo de entre 4-5 devs sería:
  1. 2 semanas para entender y organizar el diseño del nuevo microservicio de mama shopers.
  2. 2 semanas para realizar apróximaciones y primeros tests con APIs de terceros tipo Stuart o Mox, mejorando nustra solución de mama shopers y por tanto la logística con este tipo de tiendas long tail, donde la prioridad debe ser la actualid.
  3. 2-4 semanas para la ejecución avanzada de test unitarios para lo desarrollado en el MVP.
  4. Nos llevará algo más de 2 semanas profundizar en las actualizaciones de stock y precios. Es el handicap mas grande que debemos resolver para seguir creciendo.
  5. Testear la arquitectura horizontal, separando al long tail o juntando todo en uno.
  6. Con todos los pasos anteriores deberíamos dedicar 2-3 meses llegando a final de 2021 con un reescritura casi completa del monolito core, puesto que todos los servicios importantes han sido migrados anteriormente. 