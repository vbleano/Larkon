<?php

namespace App;

enum Type_of_IP:string{
    const PATENT = 'Patent';
    const INDUSTRIAL_DESIGN = 'Industrial Design';
    const UTILITY_MODEL = 'Utility Model';
    const TRADEMARK = 'Trademark';
    const COPYRIGHT = 'Copyright';
}
