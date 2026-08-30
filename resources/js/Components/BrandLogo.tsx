interface BrandLogoProps {
  className?: string;
  alt?: string;
}

export default function BrandLogo({ className = '', alt = 'WexMarket' }: BrandLogoProps) {
  return (
    <img
      src="/img/logo.png"
      alt={alt}
      className={className}
    />
  );
}
