# Tm Landing Page

Provides functionality for redirecting the route tm_landing_page.content to definable nodes, based on site language.

## Installation
Just install it like every other module.

## Landing Page Path
You can change the path setting for the route tm_landing_page.content from '/landing-page' to anouther free route. Please visit the modules routing file.

## HowTo
Please visit this modules page controller (src/Controller/TmLandingPageControlle.php) to adjust the redirecting, based on your needs.
There is a new parameter called $logged_in. Please provide different routes for logged in users.

Please also configure the provided hooks inside the module file:
- hook_language_switch_links_alter()
- hook_preprocess_menu()

