<?php
$localSchema = '<script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Bitswits",
            "image": "https://bitswits.co/src/images/logos/m-logo.svg",
            "@id": "",
            "url": "https://bitswits.co/3d-game-development/",
            "telephone": "1 - 312 379 5987",
            "priceRange": "$50",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "8 The Green STE 300",
                "addressLocality": "Dover",
                "addressRegion": "DE",
                "postalCode": "19901",
                "addressCountry": "US"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 39.1558988,
                "longitude": -75.5245173
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
                "https://www.facebook.com/Bitswits/",
                "https://twitter.com/Bitswits1/",
                "https://www.instagram.com/bitswits.official/",
                "https://www.linkedin.com/company/bitswits/"
            ]
        }
        </script>
';
$OrganizationSchema = '<script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Corporation",
            "name": "Bitswits",
            "alternateName": "bits wits",
            "url": "https://bitswits.co/3d-game-development/",
            "logo": "https://bitswits.co/src/images/logos/m-logo.svg",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "1 - 312 379 5987",
                "contactType": "sales",
                "areaServed": [
                    "US",
                    "GB",
                    "CA",
                    "AU"
                ],
                "availableLanguage": "en"
            },
            "sameAs": [
                "https://www.facebook.com/Bitswits/",
                "https://twitter.com/Bitswits1/",
                "https://www.instagram.com/bitswits.official/",
                "https://www.linkedin.com/company/bitswits/"
            ]
        }
        </script>
';
$WebsiteSchema = '<script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Bitswits",
            "url": "https://bitswits.co/3d-game-development/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://bitswits.co/3d-game-development/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
        </script>
';
?>