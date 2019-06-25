USE WorldEvents

SELECT CountryName
FROM     tblCountry INNER JOIN
                  tblEvent ON tblCountry.CountryID = tblEvent.CountryID
GROUP BY CountryName

HAVING

COUNT(EventName) > 8;
