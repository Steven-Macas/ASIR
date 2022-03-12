<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:output method="html" version="5" encoding="utf-8" indent="yes"/>
  <xsl:template match="/">
    <html>
      <head>
        <meta charser="utf-8"/>
        <meta name="description" content="information about Restriction of Covid"/>
        <meta name="author" content="Roberth Steven Macas Ordóñez"/>
        <title>Restriction Covid</title>
        <link rel="stylesheet" type="text/css" href="restrictionCovid.css"/>
      </head>
      <body>
        <section>
          <header>
            <h1>
              <xsl:attribute name="class">
                <xsl:value-of select="cent"/>
              </xsl:attribute>
              <xsl:value-of select="rss/channel/title"/>
            </h1>
            <h2>
              <xsl:value-of select="rss/channel/description"/>
            </h2>
            <xsl:apply-templates select="rss/channel"/>
          </header>
          <xsl:apply-templates select="rss/channel/item"/>
        </section>
      </body>
    </html>
  </xsl:template>
  
  <xsl:template match="channel">
    <a>
      <xsl:attribute name="href">
        <xsl:value-of select="link"/>
      </xsl:attribute>
      <xsl:attribute name="id">
        <xsl:value-of select="primLink"/>
      </xsl:attribute>
      <xsl:attribute name="target">
        <xsl:value-of select="_blank"/>
      </xsl:attribute>
      <img>
        <xsl:attribute name="src">
          <xsl:value-of select="image/url"/>
        </xsl:attribute>
          <xsl:attribute name="height">
            <xsl:value-of select="200"/>
          </xsl:attribute>
          <xsl:attribute name="width">
            <xsl:value-of select="200"/>
          </xsl:attribute>
          <xsl:attribute name="alt">
            <xsl:value-of select="articulo"/>
          </xsl:attribute>
      </img>
    </a>
  </xsl:template>
  
  <xsl:template match="item">
    <article>
      <h3>
        <xsl:attribute name="class">
          <xsl:value-of select="clr"/>
        </xsl:attribute>
        <title><xsl:value-of select="title"/></title>
      </h3>
      <a>
        <xsl:attribute name="href">
          <xsl:value-of select="link"/>
        </xsl:attribute>
        <xsl:attribute name="target">
          <xsl:value-of select="_blank"/>
        </xsl:attribute>
        <img>
          <xsl:attribute name="src">
            <xsl:value-of select="enclosure/@url"/>
          </xsl:attribute>
          <xsl:attribute name="width">
            <xsl:value-of select="300"/>
          </xsl:attribute>
          <xsl:attribute name="height">
            <xsl:value-of select="300"/>
          </xsl:attribute>
          <xsl:attribute name="alt">
            <xsl:value-of select="articulo"/>
          </xsl:attribute>
        </img>
      </a>
      <p><xsl:value-of select="description"/></p>
      <h4><xsl:value-of select="pubDate"/></h4>
    </article>
  </xsl:template>
</xsl:stylesheet>
