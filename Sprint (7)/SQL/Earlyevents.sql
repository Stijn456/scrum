Select EventName,EventDetails,CountryID
From tblEvent
Where CountryId NOT IN
(
Select Top 30 CountryID
From tblCountry
Order By CountryName Desc
)
And CategoryID NOT IN
(
Select Top 15 CategoryID
From tblCategory
Order By CategoryName Desc
)