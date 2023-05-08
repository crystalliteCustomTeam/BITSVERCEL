<?php
$localSchema = '<script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "BitsWits",
            "image": "https://bitswits.co/src/images/logos/m-logo.svg",
            "@id": "",
            "url": "https://bitswits.co/mobile-app-development",
            "telephone": "1 - 312 379 5987",
            "priceRange": "$99",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "8 The Green STE 300",
                "addressLocality": "Dover",
                "addressRegion": "DE",
                "postalCode": "19901",
                "addressCountry": "US"
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                ],
                "opens": "09:00",
                "closes": "17:00"
            },
            "sameAs": [
                "https://bitswits.co/",
                "https://www.facebook.com/officialbitswits",
                "https://twitter.com/BitsWits_",
                "https://www.instagram.com/officialbitswits/",
                "https://www.youtube.com/@officialbitswits/",
                "https://www.linkedin.com/company/officialbitswitsbitswits",
                "https://www.pinterest.com/officialbitswits/"
            ]
        }
        </script>
';
$OrganizationSchema = '<script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Corporation",
            "name": "BitsWits",
            "alternateName": "bitswits",
            "url": "https://bitswits.co/mobile-app-development/",
            "logo": "https://bitswits.co/src/images/logos/m-logo.svg",
            "sameAs": [
                "https://www.facebook.com/officialbitswits",
                "https://twitter.com/BitsWits_",
                "https://www.instagram.com/officialbitswits/",
                "https://www.youtube.com/@officialbitswits/",
                "https://www.linkedin.com/company/officialbitswitsbitswits",
                "https://bitswits.co/",
                "https://www.pinterest.com/officialbitswits/"
            ]
        }
        </script>
';
$WebsiteSchema = '<script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "BitsWits",
            "url": "https://bitswits.co/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://bitswits.co/mobile-app-development/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
        </script>
';
?>