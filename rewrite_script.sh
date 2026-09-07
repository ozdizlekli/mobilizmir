#!/bin/bash

# First, add the utility classes to style.css
cat << 'CSS' >> ./wordpress/wp-content/themes/astra-child/style.css

/* ==========================================
   LEGACY / ALTERNATİF HİZMET TASARIMI (.price-box vs)
   ========================================== */
.service-hero h1 { color: var(--gold); }
.service-hero p { color: var(--stone); font-size: 1.1rem; font-style: italic; }
.text-gold { color: var(--gold) !important; }
.text-gray { color: #bbbbbb !important; }
.price-box {
  background-color: var(--ink-2);
  border: 1px solid var(--gold);
  border-radius: var(--radius);
  padding: 30px;
}
.price-box h3 { color: var(--gold); text-align: center; }
.price-box p { text-align: center; color: #ccc; }
CSS

# Now, refactor the script.
SCRIPT_FILE="./scripts/update_services.sh"

# Replace inline styles with classes
sed -i '' 's|style="color:#d4af37;"|class="text-gold"|g' $SCRIPT_FILE
sed -i '' 's|style="color:#D4AF37;text-align:center;"||g' $SCRIPT_FILE
sed -i '' 's|style="color:#d4af37;margin:0 0 5px 0;"|class="text-gold" style="margin:0 0 5px 0;"|g' $SCRIPT_FILE
sed -i '' 's|style="color:#bbbbbb;font-size:1.05rem;line-height:2"|class="text-gray" style="font-size:1.05rem;line-height:2"|g' $SCRIPT_FILE
sed -i '' 's|style="background-color:#111111;border-color:#d4af37;border-width:1px;border-radius:4px;padding:30px"|class="wp-block-group reveal price-box"|g' $SCRIPT_FILE
sed -i '' 's|class="wp-block-group has-background reveal"| |g' $SCRIPT_FILE

