USE WorldEvents

SELECT ContinentName, EventName FROM 

				  
				  --De inner join van de tables Continent en Event--
				  tblContinent INNER JOIN
                  tblCountry ON tblContinent.ContinentID = tblCountry.ContinentID INNER JOIN
                  tblEvent ON tblCountry.CountryID = tblEvent.CountryID
				  
				  --Hier word een subquery gebruikt in een WHERE Clause waar de top 3 Continenten van de inner join worden aangeroepen--
				  WHERE ContinentName IN (SELECT TOP 3 ContinentName
				  FROM 
				  
				  tblContinent INNER JOIN
                  tblCountry ON tblContinent.ContinentID = tblCountry.ContinentID INNER JOIN
                  tblEvent ON tblCountry.CountryID = tblEvent.CountryID 
				  
				  GROUP BY ContinentName 
				  

				  --Door de ORDER BY COUNT wordt het als oplopend vergeven --
				  ORDER BY COUNT(EventName));